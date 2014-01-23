<?php
App::uses('ConnectionManager', 'Model');
$db = ConnectionManager::getDataSource('default');
$tables = $db->listSources();

if( in_array( 'locales', $tables))
{
  App::uses('Language', 'I18n.Model');

  $Language = new Language();
  $Language->configure();
}
