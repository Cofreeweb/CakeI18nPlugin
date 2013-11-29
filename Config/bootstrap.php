<?php
App::uses('ConnectionManager', 'Model');
$db = ConnectionManager::getDataSource('default');
$tables = $db->listSources();

if( in_array( 'locales', $tables))
{
  App::uses('Locale', 'I18n.Model');

  $Locale = new Locale();
  $Locale->configure();
}
