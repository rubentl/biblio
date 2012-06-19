<?php
/* Socio Test cases generated on: 2011-12-13 12:07:25 : 1323778045*/
App::uses('Socio', 'Model');

/**
 * Socio Test Case
 *
 */
class SocioTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.socio', 'app.comentario', 'app.libro', 'app.editorial', 'app.contenido', 'app.programa', 'app.prestamo', 'app.autore', 'app.autores_libro', 'app.tema', 'app.libros_tema', 'app.user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Socio = ClassRegistry::init('Socio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Socio);

		parent::tearDown();
	}

}
