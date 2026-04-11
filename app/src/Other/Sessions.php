<?php

namespace App\Other;

use App\Models\User;

class Sessions{
    public static function get(string $key)
    {
        return $_SESSION[$key] ?? null;
    }

    public static function set(string $key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    public static function remove(string $key): void
    {
        unset($_SESSION[$key]);
    }

    public static function pop(string $key)
    {
        $value = $_SESSION[$key] ?? null;

        unset($_SESSION[$key]);

        return $value;
    }

    public static function setUser(User $user){
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['user_name'] = $user->name;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_role'] = $user->role;
    }

    public static function getUser() : ?User{
        if(!isset($_SESSION['user_id'])) return null;
        
        $user = new User;

        $user->user_id = $_SESSION['user_id'];
        $user->name = $_SESSION['user_name'];
        $user->email = $_SESSION['user_email'];
        $user->role = $_SESSION['user_role'];

        return $user;
    }

    public static function isSetUser() : bool{
        return isset($_SESSION['user_id']);
    }
}