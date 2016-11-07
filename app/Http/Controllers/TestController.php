<?php
namespace App\Controllers;

use Honji\Core\View;

class TestController extends Controller
{
    public function show()
    {
        echo "this is show!";
    }

    public function index()
    {
        return View::render('test', [
            'name' => 'jackyzhang'
        ]);
    }

    public function store()
    {
        echo "this is store";
    }
}