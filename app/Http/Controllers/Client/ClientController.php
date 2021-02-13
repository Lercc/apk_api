<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientCollection;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest('id')->paginate(10);

        return new ClientCollection($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $client = Client::create($request->validated());

        // return response()->json($client, 201);
        return new ClientResource($client);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return new ClientResource($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //basic rules
        $basic_rules = [
            'name'        => ['required', 'string', 'max:80', 'regex:/^[\pL\s\-]+$/u'],
            'surnames'    => ['required', 'string', 'max:120', 'regex:/^[\pL\s\-]+$/u'],
            'mobile'      => ['nullable', 'numeric', 'digits:9'],
            'profile'     => ['string', 'nullable'],
            'commentary'  => ['string', 'nullable'],
        ];

        if ($request->dni == $client->dni) {
            $rules = ['dni' => ['required', 'numeric','digits:8']];
            
            if ($request->email == $client->email) {
                $rules = $rules + ['email' => ['required', 'string', 'email']];
            } else {
                $rules = $rules + ['email' => ['required', 'string', 'email','unique:clients,email'],];
            }
        } else if ($request->dni != $client->dni) {
            $rules = ['dni' => ['required', 'numeric','digits:8', 'unique:clients,dni']];

            if ($request->email == $client->email) {
                $rules = $rules + ['email' => ['required', 'string', 'email']];
            } else {
                $rules = $rules + ['email' => ['required', 'string', 'email','unique:clients,email'],];
            }
        }
        //VALIDACIÓN
        $rules = $rules + $basic_rules;
        $this->validate($request, $rules);
        //ACTUALIZACIÓN
        $client->update($request->all());
        //RESPUESTA API
        return new ClientResource($client);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return response()->json(null,204);
        
    }

}
