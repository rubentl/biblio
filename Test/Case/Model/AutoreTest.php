<?php
/* Autore Test cases generated on: 2011-12-13 11:59:27 : 1323777567*/
App::uses('Autore', 'Model');

/**
 * Autore Test Case
 *
 */
class AutoreTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.autore');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Autore = ClassRegistry::init('Autore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Autore);

		parent::tearDown();
	}

}
