<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Recipe;
use Hash;

class LoginController extends Controller
{

    public function index()
    {
       
        return view('login.login');
    }

    public function check(Request $request)
    {
        $recipe = Recipe::latest();
        if (request()->has('search')) {
        $recipe -> where('Recipe_name', 'Like', '%' . request () ->input('search') . '%');
    }

        $recipe = $recipe->paginate(3);

     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) 
        {
            return view('recipe.dashboard') -> with ('recipe',$recipe);
         }
          return "<h2>Username or Password Invalid!</h2>";  
       }

}