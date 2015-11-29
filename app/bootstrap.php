<?php

  use Illuminate\Database\Capsule\Manager as Capsule;

  // load the auto load files
  require_once dirname(__FILE__).'/../vendor/autoload.php';

  // get the container for the slim
  require_once 'container.php';

  // add the database
  require_once 'database.php';

  // instantiate the slim framework
  $app = new \Slim\App($container);

  $app->db = function(){
    return new Capsule;
  };

  // add the routes files
  require_once 'routes.php';
 ?>
