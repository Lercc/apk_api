<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\CareerRequest;
use App\Http\Resources\CareerCollection;
use App\Http\Resources\CareerResourse;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
   
    public function getAll()
    {
        $careers = Career::get();
        return new CareerCollection($careers);
    }
   
    public function getAllActive()
    {
        $careers = Career::where('state', '=', 'activado')->get();
        return new CareerCollection($careers);
    }
    
    public function index()
    {
        $careers = Career::latest('id')->paginate(10);
        return new CareerCollection($careers);
    }

    
    public function store(CareerRequest $request)
    {
        $career = Career::create($request->validated());
        return new CareerResourse($career);

    }

  
    public function show(Career $career)
    {
        return new CareerResourse($career);
    }

 
    public function update(CareerRequest $request, Career $career)
    {
        $career->update($request->validated());
        return new CareerResourse($career);
    }

    public function updateState(CareerRequest $request, Career $career)
    {
        // only state updated
        $career->state = $request->state;
        $career->save(); 
     
        if($request->state == 'desactivado') {
            return response()->json(['message' =>'DESACTIVADO']);
        } else {
            return response()->json(['message' =>'ACTIVADO']);
        }
    }
}
