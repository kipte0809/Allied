<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Models\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function Show()
    {
        return view("index");
    }
}



?>