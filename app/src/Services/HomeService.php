<?php

namespace App\Services;

use App\Other\Sessions;
use App\Repositories\UserRepository;
use Exception;

class HomeService{
    private UserRepository $user_rep;

    public function __construct()
    {
        $user_rep = new UserRepository();
    }

    public function getHomeViewModel(){
        
    }

    public function validateUser(string $email, string $password) : bool{
        if(empty(trim($email)) || empty(trim($password))) throw new Exception("empty_email_or_pass");

        $user = $this->user_rep->getUserByEmail($email);

        if($user == null) throw new Exception("no_account_with_email");

        $pass_match = password_verify($password, $user->password);

        if($pass_match){
            Sessions::setUser($user);
        }

        return $pass_match;
    }
}