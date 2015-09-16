<?php
App::uses('AppModel', 'Model');
/**
 * Image Model
 *
 * @property News $News
 */
class Image extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'image';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'news_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
