<?php
App::uses('AppController', 'Controller');

class AreasController extends AppController {
	public $components = array('Paginator');

	public function index() {
		$this->Area->recursive = 0;
		$this->set('areas', $this->Paginator->paginate());
		$this->set('lista_de_areas', $this->Area->find('list'));
	}

	public function view($id = null) {
		if (!$this->Area->exists($id)) {
			throw new NotFoundException(__('Invalid area'));
		}
		$options = array('conditions' => array('Area.' . $this->Area->primaryKey => $id));
		$this->set('lista_de_areas', $this->Area->find('list'));
		$this->set('area', $this->Area->findById($id));
		$this->set('subareas', $this->Area->query('SELECT * FROM areas WHERE e_subarea = '.$id));
		$this->set('cursos', $this->Area->query('SELECT * FROM cursos WHERE area_pertencente = '.$id));
	}

	public function add($area_id = null) {
		$this->set('usuario', $_SESSION['Auth']['User']['username']);
		$this->set('areas', $this->Area->find('list'));
		$this->set('superarea_id', $area_id);
		if ($this->request->is('post')) {
			$this->Area->create();
			if ($this->Area->save($this->request->data)) {
				$this->Session->setFlash(__('The area has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		if (!$this->Area->exists($id)) {
			throw new NotFoundException(__('Invalid area'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Area->save($this->request->data)) {
				$this->Session->setFlash(__('The area has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The area could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Area.' . $this->Area->primaryKey => $id));
			$this->request->data = $this->Area->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Area->id = $id;
		if (!$this->Area->exists()) {
			throw new NotFoundException(__('Invalid area'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Area->delete()) {
			$this->Session->setFlash(__('The area has been deleted.'));
		} else {
			$this->Session->setFlash(__('The area could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	
}
