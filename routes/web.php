<?php

/** @var \Laravel\Lumen\Routing\Router $router */



$router->get('/', function () use ($router) {
    return $router->app->version();
});



$router->get('/get', function () use ($router) {
    return "I am get";
});


$router->post('/post', function () use ($router) {
    return "I am post";
});


$router->put('/put', function () use ($router) {
    return "I am put";
});


$router->delete('/delete', function () use ($router) {
    return "I am delete";
});


$router->post('/rabbil',function(){

   return "I am Rabbil Hasan";

});

$router->post('/name/{name}/age/{age}/city/{city}',function($name,$age,$city){

    // return "I am Rabbil Hasan";
    return $name.$age.$city;
 
 });