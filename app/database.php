<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// create a new capsule to hold database connection
$capsule = new Capsule;

$config = new \Noodlehaus\Config(dirname(__FILE__).'/../config/app.php');

$capsule->addConnection([
  'driver'=>$config->get('db.driver'),
  'host'=>$config->get('db.hostname'),
  'database'=>$config->get('db.dbname'),
  'username'=>$config->get('db.username'),
  'password'=>$config->get('db.password'),
  'charset'=> 'utf8',
  'collation'=> 'utf8_unicode_ci',
  'prefix'=> ''
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

 ?>
