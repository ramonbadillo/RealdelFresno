<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
 	$cfg->set_model_directory($_SERVER['DOCUMENT_ROOT'] . '/models');
 	$cfg->set_connections(array( 'development' => 'mysql://root:root@localhost/espartan_punto'));
});

?>