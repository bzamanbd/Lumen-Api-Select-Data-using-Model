<?php

/** @var \Laravel\Lumen\Routing\Router $router */



$router->get('/data', 'MemberController@selectAll');
$router->post('/data', 'MemberController@selectById');