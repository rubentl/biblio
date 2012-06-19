<?php
/* Tema Test cases generated on: 2011-12-13 12:07:53 : 1323778073*/
App::uses('Tema', 'Model');

/**
 * Tema Test Case
 *
 */
class TemaTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.tema', 'app.libro', 'app.editorial', 'app.comentario', 'app.socio', 'app.contenido', 'app.programa', 'app.prestamo', 'app.user', 'app.autore', 'app.autores_libro', 'app.libros_tema');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Tema = ClassRegistry::init('Tema');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tema);

		parent::tearDown();
	}

}
