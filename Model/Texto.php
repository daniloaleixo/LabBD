<?php
App::uses('AppModel', 'Model');
/**
 * Texto Model
 *
 * @property Material $Material
 */
class Texto extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'material_id' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function cria_texto($aula_id, $dados_form) {
		$dados_form['Material']['data_criacao'] = date('Y-m-d');
		$dados_form['Material']['aula_id'] = $aula_id;
		$dados_form['Material']['uploader_id'] = $_SESSION['Auth']['User']['id'];
		return $this->saveAll($dados_form);
	}
}
