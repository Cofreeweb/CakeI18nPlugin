<?php
App::uses('Locale', 'I18n.Model');

/**
 * Locale Test Case
 *
 */
class LocaleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.i18n.locale'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Locale = ClassRegistry::init('I18n.Locale');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Locale);

		parent::tearDown();
	}

}
