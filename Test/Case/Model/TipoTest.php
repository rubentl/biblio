<?php
/* Tipo Test cases generated on: 2011-12-16 12:11:30 : 1324037490*/
App::uses('Tipo', 'Model');

/**
 * Tipo Test Case
 *
 */
class TipoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tipo', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tipo = ClassRegistry::init('Tipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tipo);

		parent::tearDown();
	}

}
