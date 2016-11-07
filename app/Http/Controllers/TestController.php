<?php
namespace App\Controllers;

use Honji\Core\View;
use Honji\Core\DB;

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
        DB::getInstance('test')->create([]);
    }
}