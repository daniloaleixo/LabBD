<?php
App::uses('AppController', 'Controller');

class AulasController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Aula->recursive = 0;
		$this->set('aulas', $this->Paginator->paginate());
	}

	public function view($id = null) {
		$curso_id = $this->Aula->query('SELECT curso_pertencente FROM aulas WHERE aulas.id = '.$id);
		$curso_id = $curso_id[0]['aulas']['curso_pertencente'];

		// ranking
// 		$redis_interface = new RedisInterface();
// 		$redis_connection = $redis_interface->create_connection();
// 		$redis_connection->incr("curso_".$curso_id."_counter");

		$this->loadModel('Curso');
		$this->loadModel('Participa');
		$this->Post = ClassRegistry::init('Post');
		if (!$this->Aula->exists($id)) {
			throw new NotFoundException(__('Invalid aula'));
		}
		$nota = $this->Aula->query('SELECT media_nota FROM media_aulas WHERE aula_id = '.$id);
		if ($nota == array()) {
			$nota = '';
		}
		else {
			$nota = $nota[0]['media_aulas']['media_nota'];
		}
		$topicos = $this->Post->query('SELECT * FROM posts WHERE em_resposta_a IS NULL AND aula_id = '.$id);
		$options = array('conditions' => array('Aula.' . $this->Aula->primaryKey => $id));
		$aula = $this->Aula->find('first', $options);
		
		$professores = $this->Participa->query('SELECT user_id FROM participas WHERE curso_id = '.$aula['Curso']['id'].' AND permissao = '. PERMISSAO_PROFESSOR);
		$tutores = $this->Participa->query('SELECT user_id FROM participas WHERE curso_id = '.$aula['Curso']['id'].' AND permissao = '. PERMISSAO_TUTOR);
		$e_prof = false;
		$e_tutor = false;
		$usuario_logado = $_SESSION['Auth']['User']['id'];
		
		if (in_array($usuario_logado, $professores) || $this->Curso->is_dono($id) ) {
			$e_prof = true;
		}
		if (in_array($usuario_logado, $tutores) ) {
			$e_tutor = true;
		}
		$this->set(compact('nota', 'topicos'));
		$this->set('aula', $aula);
		$this->set(compact('e_prof', 'e_tutor'));
		$this->set('materiais', $this->Aula->Material->query('SELECT * FROM lista_materiais, materials WHERE materials.id = lista_materiais.material_id AND materials.aula_id = '.$id));
	}
	
	public function nova_aula($curso_id) {
		if (!$this->Aula->Curso->exists($curso_id)) {
			throw new NotFoundException(__('Curso inválido'));
		}
		$this->set('curso', $this->Aula->Curso->findById($curso_id));
		if ($this->request->is('post')) {
			$this->Aula->create();
			if ($this->Aula->save($this->request->data)) {
				$this->Session->setFlash(__('The aula has been saved.'));
				return $this->redirect(array('controller' => 'cursos', 'action' => 'view', $curso_id));
			} else {
				$this->Session->setFlash(__('The aula could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		if (!$this->Aula->exists($id)) {
			throw new NotFoundException(__('Invalid aula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aula->save($this->request->data)) {
				$this->Session->setFlash(__('The aula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aula could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aula.' . $this->Aula->primaryKey => $id));
			$this->request->data = $this->Aula->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Aula->id = $id;
		if (!$this->Aula->exists()) {
			throw new NotFoundException(__('Invalid aula'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Aula->delete()) {
			$this->Session->setFlash(__('The aula has been deleted.'));
		} else {
			$this->Session->setFlash(__('The aula could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
