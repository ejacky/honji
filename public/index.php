<?php
require_once __DIR__ . '/../bootstrap/autoload.php';

try {
    $response = $app->handle(Honji\Core\Requset);

    $response->render();

} catch (Exception $e) {
    echo "something wrong:" . $e->getMessage();
}
