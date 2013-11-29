<?php
/**
 * LocaleFixture
 *
 */
class LocaleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'iso2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'iso3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'index', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'locale' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'key' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'default' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'order' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'iso2' => array('column' => 'iso2', 'unique' => 0),
			'iso3' => array('column' => 'iso3', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'iso2' => 'Lore',
			'iso3' => 'L',
			'locale' => 'Lore',
			'key' => 'Lore',
			'default' => 1,
			'order' => 1,
			'created' => '2013-10-24 13:45:12',
			'modified' => '2013-10-24 13:45:12'
		),
	);

}
