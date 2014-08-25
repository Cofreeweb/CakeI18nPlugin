<?php
App::uses('I18nUtilsBehavior', 'I18n.Model/Behavior');

/**
 * I18nUtilsBehavior Test Case
 *
 */
class I18nUtilsBehaviorTest extends CakeTestCase 
{
  
  public $fixtures = array(
      'plugin.i18n.post',
      'plugin.i18n.translate'
  );
  
  public $data = array();
/**
 * setUp method
 *
 * @return void
 */
	public function setUp() 
	{
		parent::setUp();
		$this->Post = ClassRegistry::init('I18n.Post');
		$this->Post->Behaviors->load( 'Translate' , array(
		    'title' => 'Titles'
		));
		
		$this->Post->Behaviors->load('I18n.I18nUtils');
	}
	
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() 
	{
		unset($this->Post);
		parent::tearDown();
	}

/**
 * testSetTranslations method
 *
 * @return void
 */
	public function testSetTranslations() 
	{
	  $article = $this->Post->find( 'first');
	  $article = $this->Post->setTranslations( $article);
	  
	  $expected = array(
	      'id' => '1',
    		'created' => '2007-03-18 10:39:23',
    		'modified' => '2007-03-18 10:41:31',
    		'locale' => 'spa',
    		'title' => array(
    			'eng' => 'First Post',
    			'spa' => 'Primer Post'
    		)
	  );
	  
	  $this->assertEqual( $article ['Post'], $expected);
	  
	  $articles = $this->Post->find( 'all');
	  $articles = $this->Post->setTranslations( $articles);
	  
	  $this->assertEqual( $articles [0]['Post'], $expected);
	}

}
