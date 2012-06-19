<?php
/* Ips Test cases generated on: 2011-12-15 11:52:53 : 1323949973*/
App::uses('IpsController', 'Controller');

/**
 * TestIpsController *
 */
class TestIpsController extends IpsController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * IpsController Test Case
 *
 */
class IpsControllerTestCase extends CakeTestCase {
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

		$this->Ips = new TestIpsController();
		$this->Ips->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ips);

		parent::tearDown();
	}

}
