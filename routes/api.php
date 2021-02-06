<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Program\ProgramController;
use App\Http\Controllers\ClientProgram\ClientProgramController;
use App\Http\Controllers\ClientProgram\ClientProgramVoucheController;
use App\Http\Controllers\Voucher\VoucherController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


/**
 *  Clients
 */
Route::apiResource('clients', ClientController::class);


/**
 *  Programs
 */
Route::apiResource('programs', ProgramController::class);


/**
 *  ClientPrograms
 */
Route::apiResource('clientPrograms', ClientProgramController::class);
Route::apiResource('clientPrograms.vouchers', ClientProgramVoucheController::class)->only('index');


/**
 *  Vouchers
 */
Route::apiResource('vouchers', VoucherController::class);

