<?php
/* ContenidoHtmls Test cases generated on: 2011-12-15 08:39:47 : 1323938387*/
App::uses('ContenidoHtmlsController', 'Controller');

/**
 * TestContenidoHtmlsController *
 */
class TestContenidoHtmlsController extends ContenidoHtmlsController {
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
 * ContenidoHtmlsController Test Case
 *
 */
class ContenidoHtmlsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.contenido_html', 'app.seccion');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ContenidoHtmls = new TestContenidoHtmlsController();
		$this->ContenidoHtmls->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContenidoHtmls);

		parent::tearDown();
	}

}
