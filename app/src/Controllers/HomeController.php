<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        require __DIR__ . '/../Views/home.php';
    }

    public function login()
    {
        require __DIR__ . '/../Views/user/login.php';
    }
}
