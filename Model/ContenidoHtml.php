<?php
App::uses('AppModel', 'Model');
/**
 * ContenidoHtml Model
 *
 * @property Seccion $Seccion
 */
class ContenidoHtml extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'contenido_html';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'texto';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'texto' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'borrado' => array(
			'inlist' => array(
				'rule' => array('inlist',array('si','no')),
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
		'Seccione' => array(
			'className' => 'Seccione',
			'foreignKey' => 'seccion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
