<?php

namespace App\Http\Controllers\ClientProgram;

use App\Http\Controllers\Controller;
use App\Http\Resources\VoucherCollection;
use App\Http\Resources\VoucherResource;
use App\Models\ClientProgram;
use App\Models\Voucher;
use Illuminate\Http\Request;

class ClientProgramVoucheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\ClientProgram  $clientProgram
     * @return \Illuminate\Http\Response
     */
    public function index(ClientProgram $clientProgram)
    {
        $vouchers = $clientProgram->vouchers;
        return new VoucherCollection($vouchers);
    }



    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(ClientProgram $clientProgram)
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request, ClientProgram $clientProgram)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @param  \App\Models\Voucher  $voucher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(ClientProgram $clientProgram, Voucher $voucher)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @param  \App\Models\Voucher  $voucher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(ClientProgram $clientProgram, Voucher $voucher)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @param  \App\Models\Voucher  $voucher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, ClientProgram $clientProgram, Voucher $voucher)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\ClientProgram  $clientProgram
    //  * @param  \App\Models\Voucher  $voucher
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(ClientProgram $clientProgram, Voucher $voucher)
    // {
    //     //
    // }
    
}
