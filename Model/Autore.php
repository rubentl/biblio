<?php
App::uses('AppModel', 'Model');
/**
 * Autore Model
 *
 * @property Libro $Libro
 */
class Autore extends AppModel {

	public $displayField = 'nombre';
		
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			 'isUnique' => array(
			    'rule' => array('isUnique'),
				'message' => 'Este autor ya existe',
				// 'allowEmpty' => false,
				// 'required' => true
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'borrado' => array(
            'inlist' => array(
                'rule' => array('inlist',array('si','no')),
                'allowEmpty' => true,
                'required' => false
                )
			// 'notempty' => array(
				// 'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Libro' => array(
			'className' => 'Libro',
			'joinTable' => 'autores_libros',
			'foreignKey' => 'autor_id',
			'associationForeignKey' => 'libro_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
