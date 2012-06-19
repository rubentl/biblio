<?php
/* Comentario Test cases generated on: 2011-12-16 12:49:33 : 1324039773*/
App::uses('Comentario', 'Model');

/**
 * Comentario Test Case
 *
 */
class ComentarioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.comentario', 'app.socio', 'app.libro');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Comentario = ClassRegistry::init('Comentario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Comentario);

		parent::tearDown();
	}

}
