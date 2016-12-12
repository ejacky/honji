<?php

require_once __DIR__.'/../bootstrap/autoload.php';

try {
    $response = $app->handle(Honji\Core\Request::capture());

    $response->send();
} catch (Exception $e) {
    echo '内部错误:'.$e->getMessage();
}
