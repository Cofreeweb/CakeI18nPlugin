<?php

class I18nSchema extends CakeSchema {
	public $name = 'I18n';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}


	
  public $locales = array(
			'id' =>                 array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'key' => 'primary'),
			'name' =>               array('type'=>'string', 'null' => false),
			'iso2' =>               array('type'=>'string', 'length' => 6, 'null' => false),
			'iso3' =>               array('type'=>'string', 'length' => 3, 'null' => false),
			'locale' =>             array('type'=>'string', 'length' => 6, 'null' => false),
			'key' =>                array('type'=>'string', 'length' => 6, 'null' => false),
  		'default' =>            array('type' => 'boolean', 'default' => 0),
  		'order' =>              array('type' => 'integer', 'null' => true, 'length' => 5),
			'created' =>            array('type'=>'datetime', 'null' => true),
      'modified' =>           array('type'=>'datetime', 'null' => true),
			'indexes' => array(
  			'PRIMARY' => array('column' => 'id', 'unique' => 1),
  			'iso2' => array('column' => 'iso2', 'unique' => 0),
  			'iso3' => array('column' => 'iso3', 'unique' => 0),
  		),
  );
}
?>