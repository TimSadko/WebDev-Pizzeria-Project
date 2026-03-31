<?php

namespace App\Repositories;

use App\Models\User;
use App\Other\Repository;
use PDO;

class UserRepository extends Repository
{
    public function getUserByEmail(string $email): ?User
    {
        $con = $this->connection->prepare("SELECT `user_id`, `email`, `password`, `name`, `role`, `profile_picture`, `registered_at` FROM `User` WHERE `email` = :email LIMIT 1;");
        $con->execute(['email' => $email]);

        $con->setFetchMode(PDO::FETCH_CLASS, User::class);

        $user = $con->fetch();

        return $user ?: null;
    }
}