<?php


  // get the container from slim
  $container = new \Slim\Container(['settings' => ['displayErrorDetails' => true], 'debug' => true]);

  // add config to container
  $container['config'] = function($c){
    return new \Noodlehaus\Config(dirname(__FILE__).'/../config/app.php');
  };

  // add view to container
  $container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(dirname(__FILE__).'/../resourses/views');
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c['router'],
        $c['config']->get('url')
    ));
    return $view;
};

 ?>
