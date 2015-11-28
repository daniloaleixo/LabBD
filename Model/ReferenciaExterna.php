<?php
App::uses('AppModel', 'Model');
/**
 * ReferenciaExterna Model
 *
 * @property Material $Material
 * @property User $User
 */
class ReferenciaExterna extends AppModel {

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
		'link' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
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

	public function nova_ref($aula_id, $dados_form) {
		$dados['ReferenciaExterna']['link'] = $dados_form['ReferenciaExterna']['link'];
		$dados['ReferenciaExterna']['user_id'] = $_SESSION['Auth']['User']['id'];
		$dados['Material']['aula_id'] = $aula_id;
		$dados['Material']['uploader_id'] = $_SESSION['Auth']['User']['id'];
		
		return $this->saveAll($dados);
	}
	public $belongsTo = array(
		'Material' => array(
			'className' => 'Material',
			'foreignKey' => 'material_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
