<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService 
{
    private UserRepository $_userRepository;
    
    public function __construct(UserRepository $userRepository)
    {
        $this->_userRepository = $userRepository;
    }

    public function GetUserInfo($account , $password)
    {
        return $this->_userRepository->Get($account, $password);
    }

    public function CreateUser($account , $password, $accountType) :bool
    {
        $uid =  $this->_userRepository->Insert($account,$password,$accountType);
        if($uid > 0)
        {
            return true;
        }
        return false;
    }
}



?>