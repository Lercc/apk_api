<?php

namespace App\Http\Controllers\Logout;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
 
    public function logout(User $user)
    {
        $user->tokens()->delete();
        return response()->json([ 'message' => 'Sesión terminada' ], 203);
    }
}
