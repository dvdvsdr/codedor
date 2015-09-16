<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Administrator Model
 *
 */
class Administrator extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'administrator';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	// Validation
	public $validate = array(
		'name' => array(
			'required' => array(
				'rule' => 'notBlank',
				'message' => 'Username cannot be empty'
			),
			'alphanumeric' => array(
				'rule' => 'alphaNumeric',
				'message' => 'Letters and numbers only'
			)
		),
		'password' => array(
			'minLength' => array(
				'rule' => array('minLength', '8'),
				'message' => 'Minimum 8 characters long'
			)
 		),
 		'email' => 'email'
	);	

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
		}
	}
}