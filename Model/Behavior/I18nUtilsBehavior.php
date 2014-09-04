<?php

/**
 * Utilidades para I18n
 * 
 * Importante en este Behavior no usar los callbacks, ya que debe usarse solo para métodos de ayuda a los models
 *
 */
App::uses( 'TranslateBehavior', 'Model/Behavior');

class I18nUtilsBehavior extends TranslateBehavior 
{
  
/**
 * Setea las traducciones en cada campo, con el paradigma [title][spa], [title][eng]
 * @param Model  $Model
 * @param [type] $results Los resultados de búsqueda
 * @return  Los resultados de búsqueda
 */
  public function setTranslations( Model $Model, $results)
  {
    if( isset( $results [0]))
    {
      foreach( $results as &$result)
      {
        $result = $this->__setTranslation( $Model, $result);
      }
    }
    else
    {
      $results = $this->__setTranslation( $Model, $results);
    }
    
    return $results;
  }
  
/**
 * Ayudante de I18nUtilsBehavior::setTranslations()
 * @param  Model  $Model  [description]
 * @param  string $result Los resultados de búsqueda
 * @return array         Los resultados de búsqueda
 */
  private function __setTranslation( Model $Model, $result)
  {
    $fields = $Model->Behaviors->Translate->settings [$Model->alias];
    
    foreach( $fields as $field => $plural)
    {
      if( isset( $result [$plural]))
      {
        unset( $result [$Model->alias][$field]);
        
        $node = array();
        
        foreach( Configure::read( 'Config.languages') as $locale)
        {
          $node [$locale] = '';
        }
        
        foreach( $result [$plural] as $translate)
        {
          $node [$translate ['locale']] = $translate ['content'];
        }
        
        $result [$Model->alias][$field] = $node;
      }
    }
    
    return $result;
  }
  

}
