<?php

use App\Http\Controllers\Career\CareerController;
use App\Http\Controllers\Client\ClientClientProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Program\ProgramController;
use App\Http\Controllers\ClientProgram\ClientProgramController;
use App\Http\Controllers\ClientProgram\ClientProgramVoucheController;
use App\Http\Controllers\Export\ExportController;
use App\Http\Controllers\Institution\InstitutionController;
use App\Http\Controllers\Lead\LeadController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Logout\LogoutController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Voucher\VoucherController;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/**
 * Download
 */
Route::get('download/aplicantes/{fecha}', [ExportController::class, 'exportAplicantes'])->middleware('auth:sanctum');
Route::get('download/leads/{fecha}/{tabla}', [ExportController::class, 'exportLeads'])->middleware('auth:sanctum');
Route::get('download/leads/{fecha}/aceptados/{pipeline}', [ExportController::class, 'exportLeadsAceptados'])->middleware('auth:sanctum');


/**
 * login
 */
Route::post('login', [LoginController::class, 'login']);
Route::post('login/client', [LoginController::class, 'clientLogin']);

/**
 * logout
 */
Route::post('logout/{user}', [LogoutController::class, 'logout'])->middleware('auth:sanctum');
Route::post('logout/client/{client}', [LogoutController::class, 'clientLogout'])->middleware('auth:sanctum');

/**
 * User
 */
Route::apiResource('users', UserController::class)->middleware('auth:sanctum');

/**
 * 
 */

/**
 *  Clients
 */
Route::apiResource('clients', ClientController::class)->middleware('auth:sanctum');
Route::apiResource('clients.clientPrograms', ClientClientProgramController::class)->only('index')->middleware('auth:sanctum');

/**
 *  Careers
 */
Route::get('all/careers', [CareerController::class, 'getAll'])->middleware('auth:sanctum');
Route::get('all/active/careers', [CareerController::class, 'getAllActive'])->middleware('auth:sanctum');
Route::get('all/active/careers/without', [CareerController::class, 'getAllActive']);
Route::put('updateState/careers/{career}', [CareerController::class, 'updateState'])->middleware('auth:sanctum');
Route::apiResource('careers', CareerController::class)->middleware('auth:sanctum');


/**
 *  Institutions
 */
Route::get('all/institutions', [InstitutionController::class, 'getAll'])->middleware('auth:sanctum');
Route::get('all/active/institutions', [InstitutionController::class, 'getAllActive'])->middleware('auth:sanctum');
Route::get('all/active/institutions/without', [InstitutionController::class, 'getAllActive']);
Route::put('updateState/institutions/{institution}', [InstitutionController::class, 'updateState'])->middleware('auth:sanctum');
Route::apiResource('institutions', InstitutionController::class)->middleware('auth:sanctum');

/**
 *  Programs
 */
Route::get('all/active/programs', [ProgramController::class, 'getAllActive'])->middleware('auth:sanctum');
Route::get('all/active/programs/without', [ProgramController::class, 'getAllActive']);
Route::put('updateState/programs/{program}', [ProgramController::class, 'updateState'])->middleware('auth:sanctum');
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
Route::post('leads/store', [LeadController::class, 'store'])->middleware('auth:sanctum');
Route::post('leads/store/without', [LeadController::class, 'store']);


// SHOW ONE LEAD
Route::get('leads/show/{lead}', [LeadController::class, 'show'])->middleware('auth:sanctum');
Route::get('leads/dni/{dni}', [LeadController::class, 'showLead'])->middleware('auth:sanctum');


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


