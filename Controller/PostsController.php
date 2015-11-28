<?php
App::uses('AppController', 'Controller');

class PostsController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

	public function forum($curso_id, $aula_id) {
		//abrir forum da aula
		if ($curso_id < 1) {
			//$posts = $this->Post->query('');
		}
		else {
			
		}
	}
	
	public function criar_topico($curso_id, $aula_id) {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->criar_topico($curso_id, $aula_id, $this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('controller' => 'cursos' , 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		if ($curso_id < 1) {
			$this->set('curso_id', $curso_id);
			$this->set('aula', $this->Post->Aula->findById($aula_id));
		}
		else {
		}
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$users = $this->Post->User->find('list');
		$aulas = $this->Post->Aula->find('list');
		$cursos = $this->Post->Curso->find('list');
		$this->set(compact('users', 'aulas', 'cursos'));
	}

	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$users = $this->Post->User->find('list');
		$aulas = $this->Post->Aula->find('list');
		$cursos = $this->Post->Curso->find('list');
		$this->set(compact('users', 'aulas', 'cursos'));
	}

	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
