<?php

namespace App\Models;


class Rule
{
    public const UserRule = [
        'Username' => 'bail|required',
        'Password' => 'bail|required',
    ];

    public const UserRuleErrorMessage = [
        'Username.required' => '帳號必填',
        'Password.required' => '密碼必填'
    ];

    public const CreateUserRule = [
        'Username' => 'required|unique:users,account'
    ];

    public const CreateUserRuleErrorMessage = [
        'Username.unique' => '密碼錯誤',
    ];

}




?>