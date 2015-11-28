<?php
App::uses('AppController', 'Controller');

class MaterialsController extends AppController {


	public $components = array('Paginator');

	public function index() {
		$this->Material->recursive = 0;
		$this->set('materials', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
		$this->set('material', $this->Material->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Material->create();
			if ($this->Material->save($this->request->data)) {
				$this->Session->setFlash(__('The material has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material could not be saved. Please, try again.'));
			}
		}
		$aulas = $this->Material->Aula->find('list');
		$uploaders = $this->Material->Uploader->find('list');
		$this->set(compact('aulas', 'uploaders'));
	}

	public function edit($id = null) {
		if (!$this->Material->exists($id)) {
			throw new NotFoundException(__('Invalid material'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Material->save($this->request->data)) {
				$this->Session->setFlash(__('The material has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The material could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Material.' . $this->Material->primaryKey => $id));
			$this->request->data = $this->Material->find('first', $options);
		}
		$aulas = $this->Material->Aula->find('list');
		$uploaders = $this->Material->Uploader->find('list');
		$this->set(compact('aulas', 'uploaders'));
	}

	public function delete($id = null) {
		$this->Material->id = $id;
		if (!$this->Material->exists()) {
			throw new NotFoundException(__('Invalid material'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Material->delete()) {
			$this->Session->setFlash(__('The material has been deleted.'));
		} else {
			$this->Session->setFlash(__('The material could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
