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
        if (! empty($_POST)) {
            $contact = DB::getInstance('contact')->create();

            $contact->name = $_POST['name'];
            $contact->email = $_POST['email'];

            if ($contact->save()) {
                echo "save success!";
            } else {
                echo "save failure";
            }
        }
    }
}