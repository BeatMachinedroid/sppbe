<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        $username = $session->get('username');
        if ($session->get('isLoggedIn') === true) {
            return view('layout/Dashboard/dashboard');
        } else {
            return view('layout/Auth/login');
        }
        
    }
}
