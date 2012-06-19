<?php
App::uses('AppModel', 'Model');
/**
 * Prestamo Model
 *
 * @property User $User
 * @property Libro $Libro
 */
class Prestamo extends AppModel {

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
		'Libro' => array(
			'className' => 'Libro',
			'foreignKey' => 'libro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
