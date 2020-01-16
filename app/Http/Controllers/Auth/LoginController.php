<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Auth;


class LoginController extends Controller
{
    public function login(){
        $credencials=$this->validate(request(),[
            'email'=>'email|required|string',
            'password'=>'required|string'
        ]);
        
    if(Auth::attempt($credencials)){
        
        return 'session iniciada';
    
    }else{
        return back()->withErrors(['email'=>'estos datos no coinciden']);
    }
    }
   

}
