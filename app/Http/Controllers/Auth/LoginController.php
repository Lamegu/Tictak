<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $user = $this->guard()->getProvider()->retrieveByCredentials([
            $this->username() => $request->get($this->username())
        ]);

        if ($user) {
            throw ValidationException::withMessages([
                'password' => ['La contraseña es incorrecta'],
            ]);
        }

        throw ValidationException::withMessages([
            'email' => ['Las credenciales ingresadas no coinciden con nuestros registros'],
        ]);
    }
}
