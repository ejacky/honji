<?php
namespace App\Controllers;

use Honji\Core\View;

class TestController extends Controller
{
    public function show()
    {

    }

    public function index()
    {
        return View::render('test', [
            'name' => 'jackyzhang'
        ]);
    }
}