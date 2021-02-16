<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::latest('id')->paginate(10);
        return new UserCollection($users);
    }


    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        $user->password = bcrypt($request->password);
        $user->save();
        $user->syncRoles($request->role);
        return new UserResource($user);
    }

  
    public function show(User $user)
    {
        return new UserResource($user);
    }

  
    public function update(Request $request, User $user)
    {
        $more_rules = [
            'name' => ['required', 'string', 'max:80'],
        ];

        // TRIGGER: cambio en email
        if($request->email == $user->email){
            $rules = ['email' => ['required', 'email', ]];
        
        } else {
            $rules = ['email' => ['required', 'email', 'unique:users,email'],];
        }
        
        $rules = $rules + $more_rules;
        $this->validate($request,$rules);

        $user->update($request->all());
        $user->syncRoles($request->role);
        return new UserResource($user);
    }

 
    public function destroy(User $user)
    {
        if ($user->email == 'apk.aplication@admin.com' || $user->email == 'apk@admin.com') {
            return response()->json(['message'=>'ACCIÓN NO PERMITIDA'], 203);
        } else {
            $user->delete();
            return response()->json(null,204);
        }
    }
}
