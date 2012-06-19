<?php
/* User Fixture generated on: 2011-12-16 12:16:32 : 1324037792 */

/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'nombre' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'apellidos' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'domicilio' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'telefono' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 9, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'dni' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'noticias' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'tipo_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
		'borrado' => array('type' => 'string', 'null' => false, 'default' => 'no', 'length' => 2, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'nombre' => array('column' => 'nombre', 'unique' => 1), 'password' => array('column' => 'password', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'nombre' => 'Lorem ipsum dolor sit amet',
			'apellidos' => 'Lorem ipsum dolor sit amet',
			'domicilio' => 'Lorem ipsum dolor sit amet',
			'telefono' => 'Lorem i',
			'email' => 'Lorem ipsum dolor sit amet',
			'dni' => 'Lorem ip',
			'noticias' => 1,
			'password' => 'Lorem ipsum dolor sit amet',
			'tipo_id' => 1,
			'borrado' => ''
		),
	);
}
