<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientLoginRequest;
use App\Http\Requests\LoginRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
  public function login(LoginRequest $request)
  {
    if (Auth::attempt($request->only('email', 'password'))) {

      if ($request->user()->roles[0]->name == 'aplication') {
          $request->user()->tokens()->delete();
      }

        return response()->json([
            'attributes' => [
              'id'    =>  $request->user()->id, 
              'name'    =>  $request->user()->name, 
              'email'    =>  $request->user()->email, 
              'role'    =>  $request->user()->roles[0]->name, 
              'token'   => $request->user()->createToken($request->user()->roles[0]->name)->plainTextToken,
            ]
          ]);
    }
    // login false
    return response()->json([
        'message' => 'Credenciales incorrectas'
    ], 401);
  }

  public function clientLogin(ClientLoginRequest $request)
  {
    $client = Client::where('email','=',$request->email)->get();
    $app = User::find('1');

    if(count($client) !== 0 && $request->dni === $client[0]->dni) {
      
      return response()->json([
          'attributes' => [
            'id'          =>  $client[0]->id, 
            'role'        =>  'clientAplication', 
            'token'       => $app->createToken('clientAplication')->plainTextToken,
          ]
        ]);
    } else {
      return response()->json([
          'message' => 'Credenciales incorrectas'
      ], 401);
    }
  }
  
}
