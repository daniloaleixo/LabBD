<?php
App::uses('AppController', 'Controller');
/**
 * Participas Controller
 *
 * @property Participa $Participa
 * @property PaginatorComponent $Paginator
 */
class ParticipasController extends AppController {

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
		$this->Participa->recursive = 0;
		$this->set('participas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Participa->exists($id)) {
			throw new NotFoundException(__('Invalid participa'));
		}
		$options = array('conditions' => array('Participa.' . $this->Participa->primaryKey => $id));
		$this->set('participa', $this->Participa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Participa->create();
			if ($this->Participa->save($this->request->data)) {
				$this->Session->setFlash(__('The participa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participa could not be saved. Please, try again.'));
			}
		}
		$users = $this->Participa->User->find('list');
		$cursos = $this->Participa->Curso->find('list');
		$this->set(compact('users', 'cursos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Participa->exists($id)) {
			throw new NotFoundException(__('Invalid participa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participa->save($this->request->data)) {
				$this->Session->setFlash(__('The participa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participa.' . $this->Participa->primaryKey => $id));
			$this->request->data = $this->Participa->find('first', $options);
		}
		$users = $this->Participa->User->find('list');
		$cursos = $this->Participa->Curso->find('list');
		$this->set(compact('users', 'cursos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Participa->id = $id;
		if (!$this->Participa->exists()) {
			throw new NotFoundException(__('Invalid participa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Participa->delete()) {
			$this->Session->setFlash(__('The participa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The participa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
