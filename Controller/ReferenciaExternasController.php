<?php
App::uses('AppController', 'Controller');
/**
 * ReferenciaExternas Controller
 *
 * @property ReferenciaExterna $ReferenciaExterna
 * @property PaginatorComponent $Paginator
 */
class ReferenciaExternasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReferenciaExterna->recursive = 0;
		$this->set('referenciaExternas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReferenciaExterna->exists($id)) {
			throw new NotFoundException(__('Invalid referencia externa'));
		}
		$options = array('conditions' => array('ReferenciaExterna.' . $this->ReferenciaExterna->primaryKey => $id));
		$this->set('referenciaExterna', $this->ReferenciaExterna->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($aula_id) {
		if ($this->request->is('post')) {
			$this->ReferenciaExterna->create();
			if ($this->ReferenciaExterna->nova_ref($aula_id, $this->request->data)) {
				$this->Session->setFlash(__('The referencia externa has been saved.'));
				return $this->redirect(array('controller' => 'aulas', 'action' => 'view', $aula_id));
			} else {
				$this->Session->setFlash(__('The referencia externa could not be saved. Please, try again.'));
			}
		}
		$materials = $this->ReferenciaExterna->Material->find('list');
		$users = $this->ReferenciaExterna->User->find('list');
		$this->set(compact('materials', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ReferenciaExterna->exists($id)) {
			throw new NotFoundException(__('Invalid referencia externa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReferenciaExterna->save($this->request->data)) {
				$this->Session->setFlash(__('The referencia externa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referencia externa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReferenciaExterna.' . $this->ReferenciaExterna->primaryKey => $id));
			$this->request->data = $this->ReferenciaExterna->find('first', $options);
		}
		$materials = $this->ReferenciaExterna->Material->find('list');
		$users = $this->ReferenciaExterna->User->find('list');
		$this->set(compact('materials', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ReferenciaExterna->id = $id;
		if (!$this->ReferenciaExterna->exists()) {
			throw new NotFoundException(__('Invalid referencia externa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReferenciaExterna->delete()) {
			$this->Session->setFlash(__('The referencia externa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The referencia externa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
