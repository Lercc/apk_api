<?php

namespace App\Http\Controllers\Institution;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstitutionRequest;
use App\Http\Resources\InstitutionCollection;
use App\Http\Resources\InstitutionResource;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
 
    public function getAll()
    {
        $institutions = Institution::get();
        return new InstitutionCollection($institutions);
    }
   
    public function getAllActive()
    {
        $institutions = Institution::where('state', '=', 'activado')->get();
        return new InstitutionCollection($institutions);
    }

    public function index()
    {
        $institutions = Institution::latest('id')->paginate(10);
        return new InstitutionCollection($institutions);
    }


    public function store(InstitutionRequest $request)
    {
        $institution = Institution::create($request->validated());
        return new InstitutionResource($institution);
    }


    public function show(Institution $institution)
    {
        return new InstitutionResource($institution);
    }

 
    public function update(InstitutionRequest $request, Institution $institution)
    {
        $institution->update($request->validated());
        return new InstitutionResource($institution);
    }
 
    public function updateState(InstitutionRequest $request, Institution $institution)
    {
        $institution->state = $request->state;
        $institution->save();

        if($request->state == 'desactivado') {
            return response()->json(['message' =>'DESACTIVADO']);
        } else {
            return response()->json(['message' =>'ACTIVADO']);
        }
    }

    public function destroy(Institution $institution)
    {
        //
    }
}
