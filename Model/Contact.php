<?php
App::uses('ContactInfoAppModel', 'ContactInfo.Model');
/**
 * Contact Model
 *
 * @property ContactType $ContactType
 */
class Contact extends ContactInfoAppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'contact_type_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ContactType' => array(
			'className' => 'ContactType',
			'foreignKey' => 'contact_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
