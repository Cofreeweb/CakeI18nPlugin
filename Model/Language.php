<?php
App::uses('I18nAppModel', 'I18n.Model');
App::uses('L10n', 'I18n');
/**
 * Language Model
 *
 */
class Language extends I18nAppModel 
{
  public $useTable = 'locales';
  
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
        'message' => 'El nombre no puede estar vacío',
			),
		),
		
	);
	

	
/**
 * Antes de guardar va a tomar la información del Catalogo de L10n para poner la clave de iso3 en la base de datos
 *
 * @return void
 */
	public function beforeSave()
	{
	  $L10n = new L10n;
	  $locale = $L10n->catalog( $this->data [$this->alias]['iso2']);
	  $this->data [$this->alias]['iso3'] = $locale ['locale'];
	  return true;
	}
	
/**
 * Setea en la configuración de Config.language los idiomas que tiene el web, tomando esa información de la base de datos
 *
 * @return void
 */
	public function configure()
	{
	  $L10n = new L10n;
	  $results = $this->find( 'list', array(
	    'fields' => array(
	      'iso2'
	    )
	  ));
	  
	  $locales = array();
	  
	  foreach( $results as $result)
	  {
	    $locale = $L10n->catalog( $result);
	    $locales [] = $locale ['locale'];
	  }
	  
	  Configure::write( 'Config.languages', $locales);
	}
	
}
