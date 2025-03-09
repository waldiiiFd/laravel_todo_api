<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

        if(!Auth::attempt($request->only('email', 'password'))){
            Throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    }
}
