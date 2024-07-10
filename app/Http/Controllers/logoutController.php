<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    //
    // public function logout(){
    //     //variables de sesion
    //     Session::flush();

    //     Auth::logout();

    //     return redirect()->route('login');
    // }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/login'); // Redirigir a la página de inicio de sesión
    }
}
