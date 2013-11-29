<?php


class LangsComponent extends Component 
{

  public function initialize( Controller $controller, $settings = array()) 
  {
    if( isset( $controller->request->params ['lang']))
    {
      Configure::write( 'Config.language', $controller->request->params ['lang']);
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
    $languages = Configure::read( 'Config.languages');
    $lang = Configure::read( 'Config.language');

    if( !$lang)
    {
      $lang = $L10n->get();
      $locale_catalog = $L10n->catalog( $lang);
      Configure::write( 'Config.language', $locale_catalog ['locale']);
    }
  }
}
?>