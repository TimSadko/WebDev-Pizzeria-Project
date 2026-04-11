<?php

namespace App\Controllers;

use App\Services\HomeService;
use Exception;

class HomeController
{
    private HomeService $service;

    public function __construct()
    {
        $this->service = new HomeService();
    }

    public function index()
    {
        require __DIR__ . '/../Views/home.php';
    }

    public function login()
    {
        require __DIR__ . '/../Views/user/login.php';
    }

    public function loginUser(){
        try{
            if(!isset($_POST['email']) || !isset($_POST['password'])) throw new Exception('invalid-args');

            if(!$this->service->validateUser($_POST['email'], $_POST['password'])){
                throw new Exception('incorrect-password');
            }

            require __DIR__ . '/../Views/home.php';
            exit;
        }
        catch(Exception $ex){
            
        }
    }
}
