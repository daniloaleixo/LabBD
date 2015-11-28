<?php
App::uses('AppController', 'Controller');
/**
 * Avaliacaos Controller
 *
 * @property Avaliacao $Avaliacao
 * @property PaginatorComponent $Paginator
 */
class AvaliacaosController extends AppController {

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
		$this->Avaliacao->recursive = 0;
		$this->set('avaliacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Avaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid avaliacao'));
		}
		$options = array('conditions' => array('Avaliacao.' . $this->Avaliacao->primaryKey => $id));
		$this->set('avaliacao', $this->Avaliacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($aula_id) {
		if ($this->request->is('post')) {
			$this->Avaliacao->create();
			if ($this->Avaliacao->atribui_nota($aula_id, $this->request->data)) {
				$this->Session->setFlash(__('The avaliacao has been saved.'));
				return $this->redirect(array('controller' => 'aulas', 'action' => 'view', $aula_id));
			} else {
				$this->Session->setFlash(__('The avaliacao could not be saved. Please, try again.'));
			}
		}
		$users = $this->Avaliacao->User->find('list');
		$aulas = $this->Avaliacao->Aula->find('list');
		$this->set(compact('users', 'aulas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Avaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid avaliacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Avaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The avaliacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avaliacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Avaliacao.' . $this->Avaliacao->primaryKey => $id));
			$this->request->data = $this->Avaliacao->find('first', $options);
		}
		$users = $this->Avaliacao->User->find('list');
		$aulas = $this->Avaliacao->Aula->find('list');
		$this->set(compact('users', 'aulas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Avaliacao->id = $id;
		if (!$this->Avaliacao->exists()) {
			throw new NotFoundException(__('Invalid avaliacao'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Avaliacao->delete()) {
			$this->Session->setFlash(__('The avaliacao has been deleted.'));
		} else {
			$this->Session->setFlash(__('The avaliacao could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
