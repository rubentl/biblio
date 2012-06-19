<?php
/* Libro Test cases generated on: 2011-12-13 12:06:01 : 1323777961*/
App::uses('Libro', 'Model');

/**
 * Libro Test Case
 *
 */
class LibroTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.libro', 'app.editorial', 'app.comentario', 'app.socio', 'app.contenido', 'app.programa', 'app.prestamo', 'app.autore', 'app.autores_libro', 'app.tema', 'app.libros_tema');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Libro = ClassRegistry::init('Libro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Libro);

		parent::tearDown();
	}

}
