<?php

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../framework/Config/database.php';

$app = new Honji\Application();
$app->register(new Honji\Provider\RoutingProvider());
$app->register(new Honji\Provider\ClassProvider());
//$app->register(new Honji\Provider\ViewProvider());
