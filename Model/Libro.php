<?php
App::uses('AppModel', 'Model');
/**
 * Libro Model
 *
 * @property Editorial $Editorial
 * @property Comentario $Comentario
 * @property Contenido $Contenido
 * @property Prestamo $Prestamo
 * @property Autore $Autore
 * @property Tema $Tema
 */
class Libro extends AppModel {
/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'titulo';

    // Devuelve un ean13 desde un ean10
    protected function _ean13_checksum($ean) {
         $checksum = 0;
         foreach (str_split(strrev($ean)) as $pos => $val) {
            $checksum += $val * (3 - 2 * ($pos % 2));
         }
         return ((10 - ($checksum % 10)) % 10);
         }
    
	public function ean13($ean10){
		$ean = str_replace('-','',$ean10); // quitamos los - del número
        if (strlen($ean) === 10){
            $ean = '978'.$ean;
            $ean = substr($ean,0,12);
            $resto = $this->_ean13_checksum($ean);
			$todo = $ean.$resto;
			return $todo;
		} else {
			return $ean;
		}
	}

    public function beforeSave($options = array()){
        $this->data[$this->alias]['isbn'] = $this->ean13($this->data[$this->alias]['isbn']);
        return true;
    }

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titulo' => array(
			 'isUnique' => array(
			    'rule' => array('isUnique'),
				'message' => 'Este título ya existe',
				// 'allowEmpty' => false,
				// 'required' => true
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El título debe existir',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			// 'alphanumeric' => array(
			// 	'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
		),
        'isbn' => array(
            'escero' => array(
                'rule' => array('inlist', array('0','',' ')),
                // 'message' => 'Este ISBN ya existe',
                'allowEmpty' => true,
                'required' => false,
                'last' => false,
                'on' => 'create'
            ),
			 'isUnique' => array(
			    'rule' => array('isUnique'),
				'message' => 'Este isbn ya existe',
				'allowEmpty' => true,
				'required' => false,
				'last' => true, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Esto debe ser un número',
				'allowEmpty' => true,
				'required' => false,
				'last' => true, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'anio' => array(
			// 'blank' => array(
			// 	'rule' => array('blank'),
				//'message' => 'Your custom message here',
				// 'allowEmpty' => false,
				// 'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'edicion' => array(
			// 'blank' => array(
			// 	'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		// 'encuadernacion' => array(
			// 'blank' => array(
			// 	'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
			// 'alphanumeric' => array(
				// 'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				// 'allowEmpty' => true,
				// 'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
		//	),
        //), 
        'copias' => array(
			// 'blank' => array(
			// 	'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'borrado' => array(
			// 'blank' => array(
			// 	'rule' => array('blank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
			'inlist' => array(
				'rule' => array('inlist',array('si','no')),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);


    // function checkisbn(){
    //     if (in_array($this->data['isbn'],array('','0',' '))){
    //         return true;
    //     }else{
    //         $result = $this->find('isbn',array(
    //             'conditions' =>  array(
    //                 'Libro.isbn' => $this->data['isbn'])));
    //         if (!empty($result)){
    //             return false;
    //         }else{
    //             return true;
    //         }
    //     }
    // }

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Editoriale' => array(
			'className' => 'Editoriale',
			'foreignKey' => 'editoriale_id',
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
			'foreignKey' => 'libro_id',
			'dependent' => false,
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
			'foreignKey' => 'libro_id',
			'dependent' => false,
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
			'foreignKey' => 'libro_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Autore' => array(
			'className' => 'Autore',
			'joinTable' => 'autores_libros',
			'foreignKey' => 'libro_id',
			'associationForeignKey' => 'autor_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Tema' => array(
			'className' => 'Tema',
			'joinTable' => 'libros_temas',
			'foreignKey' => 'libro_id',
			'associationForeignKey' => 'tema_id',
			'unique' => 'keepExisting',
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
