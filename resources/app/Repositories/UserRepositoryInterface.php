<?php
// app/Repositories/UserRepositoryInterface.php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function findByEmail($email);
    public function createUser(array $data);
}
