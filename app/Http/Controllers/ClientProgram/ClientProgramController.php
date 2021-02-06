<?php

namespace App\Http\Controllers\ClientProgram;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientProgramRequest;
use App\Http\Resources\ClientProgramCollection;
use App\Http\Resources\ClientProgramResource;
use App\Models\ClientProgram;
use Illuminate\Http\Request;

class ClientProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientPrograms = ClientProgram::latest('id')->paginate();
        return new ClientProgramCollection($clientPrograms);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientProgramRequest $request)
    {
        $clientProgram = ClientProgram::create($request->validated());
        return new ClientProgramResource($clientProgram);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientProgram  $clientProgram
     * @return \Illuminate\Http\Response
     */
    public function show(ClientProgram $clientProgram)
    {
        return new ClientProgramResource($clientProgram);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientProgram  $clientProgram
     * @return \Illuminate\Http\Response
     */
    public function update(ClientProgramRequest $request, ClientProgram $clientProgram)
    {
    
        $clientProgram->update($request->validated());

        return new ClientProgramResource($clientProgram);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientProgram  $clientProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientProgram $clientProgram)
    {
        $clientProgram->delete();
        return response()->json(null,204);
    }
}
