<?php
require_once __DIR__ . '/../bootstrap/autoload.php';

try {
    $container['router']->dispatch();

} catch (Exception $e) {
    echo "something wrong:" . $e->getMessage();
}
