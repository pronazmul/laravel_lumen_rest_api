<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/crud','crudController@Select');
$router->post('/crud','crudController@Insert');
$router->put('/crud','crudController@Update');
$router->delete('/crud','crudController@Delete');


// $router->get('/auth', 'authController@authMethod');
$router->get('/auth',['middleware'=>'auth','uses'=>'authController@authMethod']);



