<?php
/**
 * i18n base model
 *
 * @package 	i18n
 * @subpackage  i18n.tests.fixtures
 */
class PostFixture extends CakeTestFixture {

  
/**
 * name property
 *
 * @var string 'AnotherArticle'
 * @access public
 */
	public $name = 'Post';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	public $fields = array(
		'id' => array('type'=>'string', 'null' => false, 'length' => 36, 'key' => 'primary'), 
		'title' => array('type' => 'string', 'null' => false),
		'created' => array('type' => 'datetime'),
		'modified' => array('type' => 'datetime')
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	public $records = array(
		array(
			'id' => 1, 
			'title' => 'First Post', 
			'created' => '2007-03-18 10:39:23', 
			'modified' => '2007-03-18 10:41:31'),
		array(
			'id' => 2, 
			'title' => 'Second Post', 
			'created' => '2007-03-18 10:39:23', 
			'modified' => '2007-03-18 10:41:31'),
	);

}

?>