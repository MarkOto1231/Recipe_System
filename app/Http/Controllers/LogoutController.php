<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use Illuminate\Support\Facades\Session;
use Hash;

class LogoutController extends Controller
{
   
    public function logout(){

        Session::flush();
        Auth::logout();
        return redirect('/');
    }
        
}

