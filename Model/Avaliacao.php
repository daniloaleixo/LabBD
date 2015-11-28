<?php
App::uses('AppModel', 'Model');
/**
 * Avaliacao Model
 *
 * @property User $User
 * @property Aula $Aula
 */
class Avaliacao extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'aula_id' => array(
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Aula' => array(
			'className' => 'Aula',
			'foreignKey' => 'aula_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public function atribui_nota($aula_id, $dados_form) {
		$dados_form['Avaliacao']['user_id'] = $_SESSION['Auth']['User']['id'];
		$dados_form['Avaliacao']['aula_id'] = $aula_id;
		return $this->save($dados_form);
	}
}
