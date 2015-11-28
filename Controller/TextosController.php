<?php
App::uses('AppController', 'Controller');
/**
 * Textos Controller
 *
 * @property Texto $Texto
 * @property PaginatorComponent $Paginator
 */
class TextosController extends AppController {

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
		$this->Texto->recursive = 0;
		$this->set('textos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Texto->exists($id)) {
			throw new NotFoundException(__('Invalid texto'));
		}
		$options = array('conditions' => array('Texto.' . $this->Texto->primaryKey => $id));
		$this->set('texto', $this->Texto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($aula_id) {
		$this->Aula = ClassRegistry::init('Aula');
		if ($this->request->is('post')) {
			$this->Texto->create();
			if ($this->Texto->cria_texto($aula_id, $this->request->data)) {
				$this->Session->setFlash(__('The texto has been saved.'));
				return $this->redirect(array('controller' => 'aulas', 'action' => 'view', $aula_id));
			} else {
				$this->Session->setFlash(__('The texto could not be saved. Please, try again.'));
			}
		}
		$aula = $this->Aula->findById($aula_id);
		$this->set(compact('aula'));
	}

	public function edit($id = null) {
		if (!$this->Texto->exists($id)) {
			throw new NotFoundException(__('Invalid texto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Texto->save($this->request->data)) {
				$this->Session->setFlash(__('The texto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The texto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Texto.' . $this->Texto->primaryKey => $id));
			$this->request->data = $this->Texto->find('first', $options);
		}
		$materials = $this->Texto->Material->find('list');
		$this->set(compact('materials'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Texto->id = $id;
		if (!$this->Texto->exists()) {
			throw new NotFoundException(__('Invalid texto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Texto->delete()) {
			$this->Session->setFlash(__('The texto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The texto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
