<?php

namespace App\Http\Controllers\Program;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Http\Resources\ProgramCollection;
use App\Http\Resources\ProgramResource;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
 
    public function index()
    {
        $programs = Program::latest('id')->paginate(10);
        return new ProgramCollection($programs);
    }

    public function getAllActive(){
        $programs = Program::where('state', '=', 'activado')->get();
        return new ProgramCollection($programs);
    }


    public function store(ProgramRequest $request)
    {
        $program = Program::create($request->validated());
        return new ProgramResource($program);
    }


    public function show(Program $program)
    {
        return new ProgramResource($program);
    }

    
    public function update(ProgramRequest $request, Program $program)
    {
        $program->update($request->validated());
        return new ProgramResource($program);
    }

    public function updateState(ProgramRequest $request, Program $program)
    {
        $program->state = $request->state;
        $program->save();

        if( $request->state == 'desactivado') {
            return response()->json([ 'message' => 'DESACTIVADO']);
        } else {
            return response()->json([ 'message' => 'ACTIVADO']);
        }
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return response()->json(null,204);
    }
}
