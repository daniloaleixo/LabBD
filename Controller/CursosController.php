<?php
App::uses('AppController', 'Controller');

class CursosController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Curso->recursive = 0;
		$this->set('cursos', $this->Paginator->paginate());
		$this->set('lista_de_areas', $this->Curso->Area->find('list'));
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

	public function add() {
		$this->set('areas', $this->Curso->Area->find('list'));
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
