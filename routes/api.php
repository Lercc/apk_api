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

Route::apiResource('clients', ClientController::class);

Route::apiResource('programs', ProgramController::class);

Route::apiResource('clientPrograms', ClientProgramController::class);
Route::apiResource('clientPrograms.vouchers', ClientProgramVoucheController::class)->only('index');

Route::apiResource('vouchers', VoucherController::class);
