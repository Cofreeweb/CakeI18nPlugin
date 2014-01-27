<?php

App::uses( 'TranslateBehavior', 'Model/Behavior');

class TranslateBetterBehavior extends TranslateBehavior 
{
  public function afterFind(Model $Model, $results, $primary = false) 
  {
    $results = parent::afterFind( $Model, $results, $primary);
    
    if( isset( $results [0][$Model->alias]))
    {
      foreach( $results as &$result)
      {
        foreach( $Model->actsAs[ 'I18n.TranslateBetter'] as $field => $pl)
        {
          if( empty( $result [$Model->alias][$field])) 
          {
            $languages = Configure::read( 'Config.languages');
            $default_locale = current( $languages);
            $plural = Inflector::pluralize( ucfirst( $field));
            
            if( !empty( $result [$plural])) 
            {
              $extract = Set::extract( '/.[locale='. $default_locale .']', $result [$plural]);
              $result [$Model->alias][$field] = @$extract [0]['content'];
            }
          }
        }
      }
    }
		
		return $results;
	}

}
