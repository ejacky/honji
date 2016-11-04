<?php
require_once __DIR__ . '/../bootstrap/autoload.php';


try {
    $response = $app->handle(Honji\Core\Request::capture());

    var_dump($response);
    exit;

    $response->render();

} catch (Exception $e) {
    echo "something wrong:" . $e->getMessage();
}
