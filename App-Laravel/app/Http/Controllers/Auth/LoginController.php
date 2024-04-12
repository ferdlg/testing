<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function redirectTo()
{
    $user = auth()->user();
    $userRoles = $user->roles->pluck('rolTipo')->all();

    if (in_array('comprador', $userRoles) && in_array('vendedor', $userRoles)) {
        return route('inicio.comprador.vendedor'); 
    }
     elseif (in_array('comprador', $userRoles)) {
        return route('comprador.inicio'); 
    } 
    elseif (in_array('vendedor', $userRoles)) {
        return route('vendedor.inicio');
    } 
    else{
            return '/home'; 
    }
}

}
