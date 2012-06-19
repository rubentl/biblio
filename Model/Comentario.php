<?php
App::uses('AppModel', 'Model');
/**
 * Comentario Model
 *
 * @property User $User
 * @property Libro $Libro
 */
class Comentario extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'comentario';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'comentario' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Deberías poner un comentario',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'recomendado' => array(
			'inlist' => array(
				'rule' => array('inlist',array('si','no')),
				'message' => 'si / no',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'borrado' => array(
			'inlist' => array(
				'rule' => array('inlist',array('si','no')),
				'message' => 'si / no',
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
		'Libro' => array(
			'className' => 'Libro',
			'foreignKey' => 'libro_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
