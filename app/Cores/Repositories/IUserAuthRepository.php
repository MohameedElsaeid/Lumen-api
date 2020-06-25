<?php


namespace App\Cores\Repositories;


use App\User;

interface IUserAuthRepository
{
    public function registerNewUser(array $userRegistrationInformation): User;
}
