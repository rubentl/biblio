<?php
/* Prestamo Test cases generated on: 2011-12-13 12:06:28 : 1323777988*/
App::uses('Prestamo', 'Model');

/**
 * Prestamo Test Case
 *
 */
class PrestamoTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.prestamo', 'app.socio', 'app.libro', 'app.editorial', 'app.comentario', 'app.contenido', 'app.programa', 'app.autore', 'app.autores_libro', 'app.tema', 'app.libros_tema');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Prestamo = ClassRegistry::init('Prestamo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Prestamo);

		parent::tearDown();
	}

}
