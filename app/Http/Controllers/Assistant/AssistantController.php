<?php

namespace App\Http\Controllers\Assistant;

use App\Http\Controllers\Controller;
use App\Models\Assistant;
use Illuminate\Http\Request;

use App\Http\Requests\AssistantRequest;
use App\Http\Resources\AssistantCollection;
use App\Http\Resources\AssistantResource;

class AssistantController extends Controller
{
    public function index()
    {
        $assistants = Assistant::latest('id')->paginate(10);
        return new AssistantCollection($assistants);
    }

    public function store(AssistantRequest $request)
    {
        $assistant = Assistant::create($request->validated());
        return new AssistantResource($assistant);
    }


    public function show(Assistant $assistant)
    {
        //
    }

    public function update(Request $request, Assistant $assistant)
    {
        $rules = [
            'full_name' => ['required', 'string', 'max:255', 'regex:/^[\pL\s\-]+$/u'],
            'mobile' => ['required', 'digits:9', 'numeric'],
        ];

        if ( $request->email == $assistant->email ) {
            $more_rules = ['email' => ['required', 'string', 'email', 'max:255', ]];
        } else {
            $more_rules = ['email' => ['required', 'string', 'email', 'max:255', 'unique:assistants,email']];
        } 

        $rules = $rules + $more_rules;
        $this->validate($request,$rules);

        $assistant->update($request->all());

        return new AssistantResource($assistant);
    }

  
    public function destroy(Assistant $assistant)
    {
        $assistant->delete();
        return response()->json(null, 204);
    }
}
