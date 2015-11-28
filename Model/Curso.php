<?php
App::uses('AppModel', 'Model');
/**
 * Curso Model
 *
 */
class Curso extends AppModel {

	public $belongsTo = array(
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_pertencente',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Aula' => array(
			'className' => 'Aula',
			'foreignKey' => 'curso_pertencente',
		),
	);
	
	public $validate = array(
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'area_pertencente' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	
	public function cria_curso($dados_form){
		$dados_form['Curso']['user_id'] = $_SESSION['Auth']['User']['id'];
		return $this->save($dados_form);
	}
	
	public function is_dono($curso_id) {
		$curso = $this->findById($curso_id);
		if ($curso['Curso']['user_id'] == $_SESSION['Auth']['User']['id']) {
			return true;
		}
		return false;
	}
}
