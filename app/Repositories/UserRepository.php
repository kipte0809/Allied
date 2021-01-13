<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class UserRepository
{

    public function Get($account,$password)
    {
        return DB::table('users')->where('account', $account)->where("password" , password_hash($password,PASSWORD_BCRYPT))->get()->first(); 
    }

    public function Insert($account,$password,$type)
    {
        $userModel = array(
            'account'=>$account,
            'password'=> password_hash($password,PASSWORD_BCRYPT),
            'account_type'=>$type
        );
        return DB::table('users')->insertGetId($userModel);
    }
    
}
?>