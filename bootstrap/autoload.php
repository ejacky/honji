<?php
require __DIR__ . '/../vendor/autoload.php';

$container = new Pimple\Container();
$container->register(new Honji\Provider\RoutingProvider());