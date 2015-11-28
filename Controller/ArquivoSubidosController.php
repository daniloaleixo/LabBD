<?php
App::uses('AppController', 'Controller');
class ArquivoSubidosController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->ArquivoSubido->recursive = 0;
		$this->set('arquivoSubidos', $this->Paginator->paginate());
	}

	public function baixa_arquivo($arq_id) {
		$arq = $this->ArquivoSubido->findById($arq_id);
		//pega o nome do arquivo de dentro da string 'path'
		// 		$temp = explode('/', $arq['Relatorio']['path']);
		// 		$filename = end($temp);
		$this->response->file($arq['ArquivoSubido']['path'], array('download' => true, 'name' => 'arquivo_'.$arq['ArquivoSubido']['id']));
		return $this->response;
	}
	
	public function view($id = null) {
		if (!$this->ArquivoSubido->exists($id)) {
			throw new NotFoundException(__('Invalid arquivo subido'));
		}
		$options = array('conditions' => array('ArquivoSubido.' . $this->ArquivoSubido->primaryKey => $id));
		$this->set('arquivoSubido', $this->ArquivoSubido->find('first', $options));
	}

	public function add($aula_id) {
		if ($this->request->is('post')) {
			$this->ArquivoSubido->create();
			if ($this->ArquivoSubido->novo_arquivo($aula_id, $this->request->data)) {
				$this->Session->setFlash(__('The arquivo subido has been saved.'));
				return $this->redirect(array('controller' => 'aulas', 'action' => 'view', $aula_id));
			} else {
				$this->Session->setFlash(__('The arquivo subido could not be saved. Please, try again.'));
			}
		}
		$materials = $this->ArquivoSubido->Material->find('list');
		$users = $this->ArquivoSubido->User->find('list');
		$this->set(compact('materials', 'users'));
	}

	public function edit($id = null) {
		if (!$this->ArquivoSubido->exists($id)) {
			throw new NotFoundException(__('Invalid arquivo subido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ArquivoSubido->save($this->request->data)) {
				$this->Session->setFlash(__('The arquivo subido has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arquivo subido could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ArquivoSubido.' . $this->ArquivoSubido->primaryKey => $id));
			$this->request->data = $this->ArquivoSubido->find('first', $options);
		}
		$materials = $this->ArquivoSubido->Material->find('list');
		$users = $this->ArquivoSubido->User->find('list');
		$this->set(compact('materials', 'users'));
	}

	public function delete($id = null) {
		$this->ArquivoSubido->id = $id;
		if (!$this->ArquivoSubido->exists()) {
			throw new NotFoundException(__('Invalid arquivo subido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ArquivoSubido->delete()) {
			$this->Session->setFlash(__('The arquivo subido has been deleted.'));
		} else {
			$this->Session->setFlash(__('The arquivo subido could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
