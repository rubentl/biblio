<?php
/* Contenido Test cases generated on: 2011-12-13 12:04:37 : 1323777877*/
App::uses('Contenido', 'Model');

/**
 * Contenido Test Case
 *
 */
class ContenidoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contenido', 'app.libro', 'app.programa', 'app.socio');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Contenido = ClassRegistry::init('Contenido');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Contenido);

		parent::tearDown();
	}

}
