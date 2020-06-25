<?php

namespace App\Cores\Services;

use App\Cores\Repositories\IUserAuthRepository;
use App\User;

class UserAuthService implements IUserAuthService
{
    private IUserAuthRepository $userAuthRepo;

    public function __construct(IUserAuthRepository $userAuthRepo)
    {
        $this->userAuthRepo = $userAuthRepo;
    }

    public function register(array $userRegistrationInformation): User
    {
        return $this->userAuthRepo->registerNewUser($userRegistrationInformation);
    }
}
