<?php


class LangsComponent extends Component 
{
  private $__locales = array(
      'spa' => 'es_ES',
      'eus' => 'eu_ES',
      'fre' => 'fr_FR',
      'deu' => 'de_DE'
  );
  
  public function initialize( Controller $controller, $settings = array()) 
  {
    if( !isset( $controller->request->params ['lang']) && $controller->request->here != '/')
    {
      return;
    }
    
    App::import('Core', 'L10n');
		$L10n = new L10n();
		
    $lang = @$controller->request->params ['lang'];

    if( empty( $lang))
    {
      $lang = $L10n->get();
      $locale = $L10n->map( $lang);

      if( !isset( $controller->request ['admin']) && in_array( $locale, Configure::read( 'Config.languages')))
  		{
  		  $controller->redirect( Router::url( '/'. $lang . $controller->request->here, true));
        $response->send();
  		}
    }

	  Configure::write('Config.language', DEFAULT_LANGUAGE);
	  
    if( isset( $controller->request->params ['lang']))
    {
      Configure::write( 'Config.language', $L10n->map( $controller->request->params ['lang']));
    }
    
    $this->__setLanguage();
  }
  
  
/**
 * Setea el idioma, tomándolo desde la variable GET 'locale' o de la Session en Config.language
 * Si el idioma no está definido, se toma el idioma por defecto del navegador
 */  
  private function __setLanguage() 
  {
    App::uses( 'L10n', 'I18n');
    $L10n = new L10n();
    $language = Configure::read( 'Config.languages');
    $lang = Configure::read( 'Config.language');
    
    if( !$language)
    {
      $language = $L10n->get();
      $locale_catalog = $L10n->catalog( $language);
      Configure::write( 'Config.language', $locale_catalog ['locale']);
      $lang = $locale_catalog ['locale'];
    }

    if( isset( $this->__locales [$lang]))
    {
      setlocale( LC_ALL, $this->__locales [$lang]);
    }
  }
}
?>