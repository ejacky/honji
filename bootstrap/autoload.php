<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new Honji\Application();
$app->register(new Honji\Provider\RoutingProvider());
$app->register(new Honji\Provider\ClassProvider());