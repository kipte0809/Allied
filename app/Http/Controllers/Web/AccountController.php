<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use App\Models\AccountType;

class AccountController extends Controller
{
    private UserService $_userService;

    public function __construct(UserService $userService)
    {
        $this->_userService = $userService;
    }

    function Show()
    {
        return view("auth\login");
    }

    function Login(Request $request)
    {
        //驗證參數
        $request->validate(Rule::UserRule,Rule::UserRuleErrorMessage);

        if (Auth::attempt(["account"=>$request->Username , "password"=>$request->Password])) {
            //已存在登入帳號
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        $request->validate(Rule::CreateUserRule,Rule::CreateUserRuleErrorMessage);
        if($this->_userService->CreateUser($request->Username,$request->Password,AccountType::Default))
        {
            //create 帳號
            Auth::attempt(["account"=>$request->Username , "password"=>$request->Password]);
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }else
        {
           return redirect()->intended('auth\login');
        }
    }

    function Logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}



?>