<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    
    public function checkErrors()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o contraseña son incorrectos, por favor intenta de nuevo.'
            ]);
        }
        
        return redirect()->to('/post/index');
    }
    
    public function logout()
    {
        auth()->logout();
        
        return redirect()->to('/post/index');
    }
}
