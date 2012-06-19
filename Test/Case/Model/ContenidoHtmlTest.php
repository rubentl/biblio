<?php
/* ContenidoHtml Test cases generated on: 2011-12-15 08:32:55 : 1323937975*/
App::uses('ContenidoHtml', 'Model');

/**
 * ContenidoHtml Test Case
 *
 */
class ContenidoHtmlTestCase extends CakeTestCase {
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

		$this->ContenidoHtml = ClassRegistry::init('ContenidoHtml');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ContenidoHtml);

		parent::tearDown();
	}

}
