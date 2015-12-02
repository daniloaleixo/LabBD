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
}
