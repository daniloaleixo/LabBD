<?php
App::uses('AppController', 'Controller');

class CursosController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->Paginator->paginate());
		$this->set('lista_de_areas', $this->Curso->Area->find('list'));

		
		// abre conexão com o redis e pega contadores de visualizações
// 		$redis_interface = new RedisInterface();
// 		$redis_connection = $redis_interface->create_connection();

// 		// prepara o ranking e manda para a view
// 		$ids_cursos = $this->Curso->query('SELECT * FROM cursos');
// 		$ids_cursos = $ids_cursos;

// 		$ranking = array();

// 		// dicionário de ids e contador de views
// 		foreach($ids_cursos as $row) {
// 			$id = $row['cursos']['id'];
// 			$score = $redis_connection->get("curso_".$id."_counter");
// 			$ranking[] = array($id, $score, $row);
// 		}
		
// 		// para ordenar o ranking
// 		function cmp($a, $b) {
// 			if($a[1] == $b[1]) {
// 				if($a[0] == $b[0]) {
// 					return 0;
// 				}
// 				return ($a[0] < $b[0]) ? 1 : -1;
// 			}
// 			return ($a[1] < $b[1]) ? 1 : -1;
// 		}
// 		usort($ranking, "cmp");

// 		// pega os primeiros do ranking
// 		$ranking = array_slice($ranking, 0, 5);

// 		$this->set(compact('ranking'));
	}

	public function view($id = null) {
		$this->Participa = ClassRegistry::init('Participa');
		if (!$this->Curso->exists($id)) {
			throw new NotFoundException(__('Invalid curso'));
		}
		$professores = $this->Participa->query('SELECT user_id FROM participas WHERE curso_id = '.$id.' AND permissao = '. PERMISSAO_PROFESSOR);
		$tutores = $this->Participa->query('SELECT user_id FROM participas WHERE curso_id = '.$id.' AND permissao = '. PERMISSAO_TUTOR);
		$e_prof = false;
		$e_tutor = false;
		$usuario_logado = $_SESSION['Auth']['User']['id'];
		
		if (in_array($usuario_logado, $professores) || $this->Curso->is_dono($id) ) {
			$e_prof = true;
		}
		if (in_array($usuario_logado, $tutores) ) {
			$e_tutor = true;
		}
		$options = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $id));
		$this->set('curso', $this->Curso->find('first', $options));
		$this->set('aulas', $this->Curso->Aula->query('SELECT * FROM aulas WHERE curso_pertencente = '.$id));
		$this->set(compact('e_prof', 'e_tutor'));
	}

	public function add($area_id = null) {
		$this->set('areas', $this->Curso->Area->find('list'));
		$this->set('area_id', $area_id);
		if ($this->request->is('post')) {
			$this->Curso->create();
			if ($this->Curso->cria_curso($this->request->data)) {
				$this->Session->setFlash(__('The curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.'));
			}
		}
	}

	public function iniciar_curso($curso_id) {
		if ($this->Curso->iniciar_curso($curso_id) ) {
			$this->Session->setFlash(__('Curso ativado com sucesso'));
			return $this->redirect(array('controller' => 'cursos', 'action' => 'view', $curso_id));
		}
		else {
			$this->Session->setFlash(__('Não foi possivel ativar o curso'));
		}
	}
	
	public function edit($id = null) {
		if (!$this->Curso->exists($id)) {
			throw new NotFoundException(__('Invalid curso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Curso->save($this->request->data)) {
				$this->Session->setFlash(__('The curso has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The curso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Curso.' . $this->Curso->primaryKey => $id));
			$this->request->data = $this->Curso->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Curso->id = $id;
		if (!$this->Curso->exists()) {
			throw new NotFoundException(__('Invalid curso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Curso->delete()) {
			$this->Session->setFlash(__('The curso has been deleted.'));
		} else {
			$this->Session->setFlash(__('The curso could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
