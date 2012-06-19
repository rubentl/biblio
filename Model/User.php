<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Tipo $Tipo
 * @property Comentario $Comentario
 * @property Contenido $Contenido
 * @property Prestamo $Prestamo
 */
class User extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			// 'alphanumeric' => array(
			// 	'rule' => array('alphanumeric'),
			// 	'message' => 'Sólo se admiten caracteres alfanuméricos',
			// 	'allowEmpty' => false,
			// 	//'required' => false,
			// 	//'last' => false, // Stop validation after this rule
			// 	//'on' => 'create', // Limit validation to 'create' or 'update' operations
			// ),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo no puede estar vacío',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Este usuario ya está en uso, elige otro',
			),
		),
		'apellidos' => array(
			// 'alphanumeric' => array(
			// 	'rule' => array('alphanumeric'),
			// 	'message' => 'Sólo se admiten caracteres alfanuméricos',
			// 	'allowEmpty' => true,
			// 	//'required' => false,
			// 	//'last' => false, // Stop validation after this rule
			// 	//'on' => 'create', // Limit validation to 'create' or 'update' operations
			// ),
		),
		'domicilio' => array(
			// 'alphanumeric' => array(
			// 	'rule' => array('alphanumeric'),
			// 	'message' => 'Sólo se admiten caracteres alfanuméricos',
			// 	'allowEmpty' => true,
			// 	//'required' => false,
			// 	//'last' => false, // Stop validation after this rule
			// 	//'on' => 'create', // Limit validation to 'create' or 'update' operations
			// ),
		),
		'telefono' => array(
			// 'phone' => array(
			// 	'rule' => array('phone'),
			// 	'message' => '¿Es este tu teléfono?',
			// 	'allowEmpty' => true,
			// 	//'required' => false,
			// 	//'last' => false, // Stop validation after this rule
			// 	//'on' => 'create', // Limit validation to 'create' or 'update' operations
			// ),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'No parece un email válido',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dni' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Sólo los números del dni',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo es obligatorio',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'noticias' => array(
			'inlist' => array(
				'rule' => array('inlist',array('si','no')),
				'message' => 'si / no',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Este campo no puede estar vacío',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rep_password' => array(
			'checkpass' => array(
				'rule' => array('checkpass'),
				'message' => 'Las contraseñas no coinciden',
				'allowEmpty' => false,
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
	function checkpass(){
		if ($this->data['User']['password'] !== $this->data['User']['rep_password']){
			return false;
		} else {
			return true;
		}
	}
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id',
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
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Contenido' => array(
			'className' => 'Contenido',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Prestamo' => array(
			'className' => 'Prestamo',
			'foreignKey' => 'user_id',
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
