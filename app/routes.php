<?php

use App\Controllers\BlogController;
use App\Controllers\UserController;

$app->group('/blogs', function(){

  $this->get('', function($request, $response, $args){
    $blogs = BlogController::allBlogs();
    $response->withHeader('Content-Type', 'application/json')
              ->write($blogs);
  });

  $this->get('/{id}', function($request, $response, $args){

    $blog = BlogController::fetch($args['id']);
    $response->withHeader('Content-Type', 'application/json')
              ->write($blog);
  });

});

$app->group('/users', function(){

  $this->get('', function($request, $response, $args){
    $users = UserController::allUsers();
    $response->withHeader('Content-Type', 'application/json')
              ->write($users);
  });

  $this->get('/{id}', function($request, $response, $args){

    $user = UserController::fetch($args['id']);
    $response->withHeader('Content-Type', 'application/json')
              ->write($user);
  });

});


?>
