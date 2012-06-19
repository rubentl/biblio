<?php
/* Programa Test cases generated on: 2011-12-13 12:06:49 : 1323778009*/
App::uses('Programa', 'Model');

/**
 * Programa Test Case
 *
 */
class ProgramaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.programa', 'app.contenido', 'app.libro', 'app.editorial', 'app.comentario', 'app.socio', 'app.prestamo', 'app.autore', 'app.autores_libro', 'app.tema', 'app.libros_tema');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Programa = ClassRegistry::init('Programa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Programa);

		parent::tearDown();
	}

}
