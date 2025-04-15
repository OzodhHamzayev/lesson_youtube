<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginRequest;
use App\Models\User;
use App\Services\Admin\AdminServices;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function login(){
        return view('admin.login');
    }
    public function authLogin(AdminLoginRequest $request){
        $validated = $request->validated();
            if(Auth::attempt(['password' => $validated['password'], 'email' => $validated['email']])){
               return redirect()->route('home'); 
            }
        else{
            return redirect()->route('login')->withErrors([
                'email' => 'Email yoki Parol xato'
            ]);
        }
    }
}