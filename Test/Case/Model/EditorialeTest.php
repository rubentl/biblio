<?php
/* Editoriale Test cases generated on: 2011-12-13 12:05:14 : 1323777914*/
App::uses('Editoriale', 'Model');

/**
 * Editoriale Test Case
 *
 */
class EditorialeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.editoriale');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Editoriale = ClassRegistry::init('Editoriale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Editoriale);

		parent::tearDown();
	}

}
