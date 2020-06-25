<?php


namespace App\Cores\Repositories;


use App\User;

/**
 * Class UserAuthRepository
 * @package App\Cores\Repositories
 */
class UserAuthRepository implements IUserAuthRepository
{
    /**
     * @var User
     */
    private User $user;

    /**
     * UserAuthRepository constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param array $userRegistrationInformation
     * @return User
     */
    public function registerNewUser(array $userRegistrationInformation): User
    {
        return $this->user->create($userRegistrationInformation);
    }
}
