<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
  public function login(LoginRequest $request)
  {
    if (Auth::attempt($request->only('email', 'password'))) {

        return response()->json([
            'token' => $request->user()->createToken($request->token_name)->plainTextToken,
            'message' => 'Success',
        ]);
    }

    // login false
    return response()->json([
        'message' => 'Unauthorized'
    ], 401);
  }
}
