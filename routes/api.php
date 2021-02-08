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


/**
 *  Leads ****************************************************************************************************************************************************
 */

// CREATE LEADS
Route::post('leads/store', [LeadController::class, 'store'])->name('leads.store');


// INDEX LEADS
Route::get('leads/calificados', [LeadController::class, 'indexCalificados'])->name('leads.calificados');//->middleware('auth');

Route::get('leads/perfiles-aceptados', [LeadController::class, 'indexAceptados'])->name('leads.aceptados'); //->middleware('auth');
Route::get('leads/perfiles-aceptados-enviado', [LeadController::class, 'indexAceptadosEnviado'])->name('leads.aceptados.enviado'); //->middleware('auth');
Route::get('leads/perfiles-aceptados-noenviado', [LeadController::class, 'indexAceptadosNoEnviado'])->name('leads.aceptados.noenviado'); //->middleware('auth');

Route::get('leads/edad', [LeadController::class, 'indexEdad'])->name('leads.edad'); //->middleware('auth');
Route::get('leads/ingles', [LeadController::class, 'indexIngles'])->name('leads.ingles'); //->middleware('auth');


//  UPDATE GENERAL LEADS
Route::put('leads/{lead}/update', [LeadController::class, 'update'])->name('leads.update'); //->middleware('auth');


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


