<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 * @property User $User
 * @property Aula $Aula
 * @property Curso $Curso
 */
class Post extends AppModel {

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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public function criar_topico($curso_id, $aula_id, $dados_form) {
		
		$dados_form['Post']['user_id'] = $_SESSION['Auth']['User']['id'];
		if ($curso_id < 1) {
			$dados_form['Post']['curso_id'] = null;
		}
		else {
			$dados_form['Post']['curso_id'] = $curso_id;
		}
		if ($aula_id < 1) {
			$dados_form['Post']['aula_id'] = NULL;
		}
		else {
			$dados_form['Post']['aula_id'] = $aula_id;
		}
		return $this->save($dados_form);
	}
	
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
		),
		'Curso' => array(
			'className' => 'Curso',
			'foreignKey' => 'curso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
