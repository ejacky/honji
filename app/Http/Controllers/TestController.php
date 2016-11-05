<?php
namespace App\Controllers;

class TestController
{
    public function show()
    {

    }

    public function index()
    {
        return $this->view->render('test');
    }
}