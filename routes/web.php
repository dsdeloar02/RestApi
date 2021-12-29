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