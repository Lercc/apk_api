<?php

namespace App\Http\Controllers\Logout;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
 
    public function logout(User $user)
    {
        $user->tokens()->delete();
        return response()->json([ 'message' => 'Sesión terminada' ], 203);
    }

    public function clientLogout(Request $request ,Client $client)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([ 'message' => 'Sesión terminada' ], 203);
    }
}
