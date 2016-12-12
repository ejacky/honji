<?php

$container['route']->addRoute('dashboard', 'DashboardController@show');
$container['route']->addRoute('dashboard/:user_id', 'DashboardController@show');
$container['route']->addRoute('test', 'TestController@index');
$container['route']->addRoute('test/store', 'TestController@store');
$container['route']->addRoute('info', function (Request $request) {
    echo 'this is info';
});
