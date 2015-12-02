<?php
App::uses('AppController', 'Controller');

class AulasController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Aula->recursive = 0;
		$this->set('aulas', $this->Paginator->paginate());
	}

	public function view($id = null) {
		
		$this->Post = ClassRegistry::init('Post');
		if (!$this->Aula->exists($id)) {
			throw new NotFoundException(__('Invalid aula'));
		}
		$nota = $this->Aula->query('SELECT media_nota FROM media_aulas WHERE aula_id = '.$id);
		if ($nota == array()) {
			$nota = '';
		}
		else {
			$nota = $nota[0]['media_aulas']['media_nota'];
		}
		$topicos = $this->Post->query('SELECT * FROM posts WHERE em_resposta_a IS NULL AND aula_id = '.$id);
		$options = array('conditions' => array('Aula.' . $this->Aula->primaryKey => $id));
		$this->set(compact('nota', 'topicos'));
		$this->set('aula', $this->Aula->find('first', $options));
		$this->set('materiais', $this->Aula->Material->query('SELECT * FROM lista_materiais, materials WHERE materials.id = lista_materiais.material_id AND materials.aula_id = '.$id));
	}
	
	public function nova_aula($curso_id) {
		if (!$this->Aula->Curso->exists($curso_id)) {
			throw new NotFoundException(__('Curso inválido'));
		}
		$this->set('curso', $this->Aula->Curso->findById($curso_id));
		if ($this->request->is('post')) {
			$this->Aula->create();
			if ($this->Aula->save($this->request->data)) {
				$this->Session->setFlash(__('The aula has been saved.'));
				return $this->redirect(array('controller' => 'cursos', 'action' => 'view', $curso_id));
			} else {
				$this->Session->setFlash(__('The aula could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		if (!$this->Aula->exists($id)) {
			throw new NotFoundException(__('Invalid aula'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aula->save($this->request->data)) {
				$this->Session->setFlash(__('The aula has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aula could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Aula.' . $this->Aula->primaryKey => $id));
			$this->request->data = $this->Aula->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Aula->id = $id;
		if (!$this->Aula->exists()) {
			throw new NotFoundException(__('Invalid aula'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Aula->delete()) {
			$this->Session->setFlash(__('The aula has been deleted.'));
		} else {
			$this->Session->setFlash(__('The aula could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
