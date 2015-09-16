<?php
App::uses('AppModel', 'Model');
App::uses('CakeTime', 'Utility');
/**
 * News Model
 *
 * @property Administrator $Administrator
 * @property Image $Image
 */
class News extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	public $validate = array(
		'title' => array(
			'between' => array(
				'rule' => array('lengthBetween', 15, 50),
				'message' => 'Length between 15 and 50 characters'
			)
		),
		'body' => array(
			'rule' => 'notBlank',
			'message' => 'The news item cannot be empty'
		),
		'publish_date' => array(
			'rule' => array('checkFutureDate'),
            'message' => 'Cannot be in the past'
		),
		'embargo_date' => array(
			'rule' => array('checkFutureDate'),
            'message' => 'Cannot be in the past'
		)
	);

	function checkFutureDate($check) {
    	$value = array_values($check);
    	return CakeTime::fromString($value['0']) >= CakeTime::fromString(date('Y-m-d'));
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Administrator' => array(
			'className' => 'Administrator',
			'foreignKey' => 'administrator_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Image' => array(
			'className' => 'Image',
			'foreignKey' => 'news_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
