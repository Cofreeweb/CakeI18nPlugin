<?php
/**
 * TranslationShell
 * 
 * [Short Description]
 *
 * @package i18n.Shell
 * @version $Id$
 **/

class TranslationShell extends AppShell 
{

/**
 * Añade un campo a un model
 *
 * @example Console/cake i18n.translation addfield
*/
  function addfield()
  {
    $model_name = $this->in( 'Introduce el model');
    $Model = ClassRegistry::init( $model_name);
    $field = $this->in( 'Introduce el campo');
    $locale_default = Configure::read( 'Config.language');
      
    $I18Model = ClassRegistry::init('I18nModel');
    $Model->unbindTranslation();
    $contents = $Model->find( 'all', array( 
          'recursive' => -1
    ));
    
    foreach( $contents as $content)
    {
      foreach( Configure::read( 'Config.languages') as $locale)
      {
        $data = array(
          'locale' => $locale,
          'model' => $Model->name,
          'foreign_key' => $content [$Model->alias]['id'],
          'field' => $field
        );
        
        if( !$I18Model->hasAny( $data))
        {
          $data ['content'] = $content [$Model->alias][$field];
          $I18Model->create();
          $I18Model->save( $data);
        }
      }
    }
  }

}
?>