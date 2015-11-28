<?php
App::uses('AppModel', 'Model');
/**
 * Aula Model
 *
 */
class Aula extends AppModel {

	public $belongsTo = array(
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_pertencente',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public $hasMany = array(
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'aula_id',
		),
	);
	
	public $validate = array(
		'curso_pertencente' => array(
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
}
