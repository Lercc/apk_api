<?php

use App\Http\Controllers\Client\ClientClientProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Program\ProgramController;
use App\Http\Controllers\ClientProgram\ClientProgramController;
use App\Http\Controllers\ClientProgram\ClientProgramVoucheController;
use App\Http\Controllers\Lead\LeadController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Voucher\VoucherController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * login
 */
Route::post('login', [LoginController::class, 'login']);

/**
 *  Clients
 */
Route::apiResource('clients', ClientController::class)->middleware('auth:sanctum');
Route::apiResource('clients.clientPrograms', ClientClientProgramController::class)->only('index')->middleware('auth:sanctum');

/**
 *  Programs
 */
Route::apiResource('programs', ProgramController::class)->middleware('auth:sanctum');


/**
 *  ClientPrograms
 */
Route::apiResource('clientPrograms', ClientProgramController::class)->middleware('auth:sanctum');
Route::apiResource('clientPrograms.vouchers', ClientProgramVoucheController::class)->only('index')->middleware('auth:sanctum');


/**
 *  Vouchers
 */
Route::apiResource('vouchers', VoucherController::class)->middleware('auth:sanctum');


/**
 *  Leads ****************************************************************************************************************************************************
 */

// CREATE LEADS
Route::post('leads/store', [LeadController::class, 'store']);
Route::get('leads/show/{lead}', [LeadController::class, 'show'])->middleware('auth:sanctum');


// INDEX LEADS
Route::get('leads/calificados', [LeadController::class, 'indexCalificados'])->middleware('auth:sanctum');

Route::get('leads/perfiles-aceptados', [LeadController::class, 'indexAceptados'])->middleware('auth:sanctum');
Route::get('leads/perfiles-aceptados-enviado', [LeadController::class, 'indexAceptadosEnviado'])->middleware('auth:sanctum');
Route::get('leads/perfiles-aceptados-noenviado', [LeadController::class, 'indexAceptadosNoEnviado'])->middleware('auth:sanctum');

Route::get('leads/edad', [LeadController::class, 'indexEdad'])->middleware('auth:sanctum');
Route::get('leads/ingles', [LeadController::class, 'indexIngles'])->middleware('auth:sanctum');


//  UPDATE GENERAL LEADS
Route::put('leads/{lead}/update', [LeadController::class, 'update'])->name('leads.update')->middleware('auth:sanctum'); //->middleware('auth');


// UPDATE PARTICULARES LEADS
Route::put('leads/{lead}/updateQualifiedTable', [LeadController::class, 'updateQualifiedTable'])->name('leads.updateQualifiedTable'); //->middleware('auth');
Route::put('leads/{lead}/updateAceptedTable', [LeadController::class, 'updateAceptedTable'])->name('leads.updateAceptedTable'); //->middleware('auth');
Route::put('leads/{lead}/updateAgeTable', [LeadController::class, 'updateAgeTable'])->name('leads.updateAgeTable'); //->middleware('auth');
Route::put('leads/{lead}/updateEnglishTable', [LeadController::class, 'updateEnglishTable'])->name('leads.updateEnglishTable'); //->middleware('auth');

Route::put('leads/{lead}/{pPipe}/updatepipeline', [LeadController::class, 'updatePipeline'])->name('leads.update.pipeline'); //->middleware('auth');


// DELETE GENERAL LEADS
Route::delete('leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy'); //->middleware('auth');

 /**
 *  END LEADS  *************************************************************************************************************************************************
 */


