<?php

namespace App\Models;

use DateTime;

class User{
    public int $user_id;
    public string $email;
    public string $password;
    public string $name;
    public int $role;
    public string $profile_picture;
    public DateTime $registration_date;

    function __set($name, $value) {
        if($name == "registered_at") {
            $this->registration_date = new DateTime($value);
        }
    }
}