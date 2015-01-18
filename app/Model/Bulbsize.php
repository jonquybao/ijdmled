<?php
App::uses('AppModel', 'Model');
class Bulbsize extends AppModel {

////////////////////////////////////////////////////////////

	public $validate = array(
		'size' => array(
			'rule1' => array(
				'rule' => array('notempty'),
				'message' => 'Size is invalid',
				//'allowEmpty' => false,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		)
	);
	 public function findList() {
		return $this->find('list', array(
			'order' => array(
				'Bulbsize.name' => 'ASC'
			)
		));
	}



}
