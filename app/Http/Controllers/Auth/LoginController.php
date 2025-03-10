<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
       /*  $user= User:: where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            Throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        } */

        if (!auth()->attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages([
                'email' => ['The credentials you entered are incorrect.']
            ]);
        }
    }
}
