<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\ClientProgramCollection;
use App\Http\Resources\ClientProgramResource;
use App\Models\Client;
use App\Models\ClientProgram;
use Illuminate\Http\Request;

class ClientClientProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        $clientPrograms = $client->clientPrograms;
        return new ClientProgramCollection($clientPrograms);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @param  \App\Models\Client  $client
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(Client $client)
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Client  $client
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request, Client $client)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Client  $client
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Client $client, ClientProgram $clientProgram)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Client  $client
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Client $client, ClientProgram $clientProgram)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Client  $client
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Client $client, ClientProgram $clientProgram)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Client  $client
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Client $client, ClientProgram $clientProgram)
    // {
    //     //
    // }
}
