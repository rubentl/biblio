<?php
/* Seccione Test cases generated on: 2011-12-15 08:33:26 : 1323938006*/
App::uses('Seccione', 'Model');

/**
 * Seccione Test Case
 *
 */
class SeccioneTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.seccione');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Seccione = ClassRegistry::init('Seccione');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Seccione);

		parent::tearDown();
	}

}
