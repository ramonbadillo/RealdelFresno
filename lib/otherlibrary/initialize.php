<?php 
require_once $_DIR . 'lib/php-activerecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
 	$cfg->set_model_directory($_DIR . 'models');
 	$cfg->set_connections(array( 'development' => 'mysql://root:root@localhost/espartan_punto'));
});

?>