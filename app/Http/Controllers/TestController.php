<?php

namespace App\Controllers;

use Honji\Core\DB;
use Honji\Core\Request;
use Honji\Core\View;

class TestController extends Controller
{
    public function show()
    {
        echo 'this is show!';
    }

    public function index()
    {
        $contactList = DB::getInstance('contact')->find_many();
        $contactCount = DB::getInstance('contact')->count();

        return View::render('test', [
            'contactList'  => $contactList,
            'contactCount' => $contactCount,
        ]);
    }

    public function edit()
    {
    }

    public function store(Request $request)
    {
        if (!empty($_POST)) {
            $contact = DB::getInstance('contact')->create();

            $contact->name = $_POST['name'];
            $contact->email = $_POST['email'];

            if ($contact->save()) {
                header('Location:/test');
            } else {
                echo 'save failure';
            }
        }
    }
}
