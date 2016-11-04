<?php

$container['route']->addRoute('dashboard', 'DashboardController', 'show');
$container['route']->addRoute('dashboard/:user_id', 'DashboardController', 'show');