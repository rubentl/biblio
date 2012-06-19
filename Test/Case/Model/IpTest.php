<?php
/* Ip Test cases generated on: 2011-12-15 11:52:25 : 1323949945*/
App::uses('Ip', 'Model');

/**
 * Ip Test Case
 *
 */
class IpTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.ip');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Ip = ClassRegistry::init('Ip');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ip);

		parent::tearDown();
	}

}
