<?php

use App\Http\Controllers\Login\LoginController;
use App\Models\Voucher;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\VoucherRegistradoMailable;
use App\Mail\EqualCodeVouchersMailable;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 *  EXPORT APLICANTES VIEW TEST
 */
// Route::get('/aplicantes-export-view', function () {
//     $aplicantes = Client::orderBy('id','asc')->get();
//     return view('exports.aplicantes', compact('aplicantes'));
// });

/**
 *  EXPORT APLICANTES RESUME COST VIEW TEST
 */
// Route::get('/aplicantes-resume-cost-export-view', function () {
//     $season = '2021';
//     $aplicantes = Client:: select('clients.*')
//                                ->join('client_programs', 'client_programs.client_id', '=', 'clients.id')
//                                ->where('client_programs.season', '=', $season)
//                                ->orderBy('clients.id', 'asc')
//                                ->get(); 
//     return view('exports.aplicantesResumeCost', compact('aplicantes', 'season'));
// });

/**
 * mail 
 */

// Route::get('/', function () {
//         $content = Voucher::find(263);
//         return view('mail.voucherRegisteredNew', compact('content'));
//     });
    
// Route::get('/enviar', function () {
//         $voucher = Voucher::find(169);
//         Mail::to('lercc.en@gmail.com')->queue(new VoucherRegistradoMailable($voucher));
//         return 'enviado';
// });

// Route::get('/testEqualvouchers', function () {
//     // $str = '0135905';
//     // $str = '135';
//     $currentVoucher = Voucher::find('115');
//     $str =  rtrim(ltrim($currentVoucher->code, '0'), '0');

//     $vouchers = Voucher::where('code', 'like', "%$str%")->get();

//     // $str = '0000541000035400000';
//     // return rtrim(ltrim($str, '0'), '0');

//     // return gettype($vouchers);
//     // return $vouchers;
    
//     if (sizeof($vouchers) > 1 ) {
//         // 
//         return view('mail.equalCodeVouchers', compact(['vouchers','currentVoucher']));
        
//         // Mail::to('lercc.en@gmail.com')->queue(new EqualCodeVouchersMailable($vouchers, $currentVoucher));
//         // return 'enviado'; 
//     }
//     return sizeof($vouchers);
//     // return $vouchers;
// });

/**
 * users_type_employee - laravel permissions
*/
// Route::get('/', function () {
//     $users_type_employee = User::Role(['employee'])->get();
//     $emails = [];
//     foreach ($users_type_employee as $key => $user) {
//         array_push($emails, $user->email);
//     }
//     return $emails;
// });


/*
 * EMULANDO TERMINAL
*/
// Route::get('/crear-enlace-simbolico-storage', function () {
//     Artisan::call('storage:link');
//     return 'Enlace simbolico creado!!';
// });
// Route::get('/config-cache', function () {
//     Artisan::call('config:cache');
//     Artisan::call('config:clear');
//     Artisan::call('cache:clear');
//     return 'Configuration cache cleared! -Configuration cached successfully!!!';
// });
// Route::get('/make-export-AplicantesResumeCostExport', function () {
//     Artisan::call('make:export', ['name' => 'AplicantesResumeCostExport']);
//     return 'make-export-AplicantesResumeCostExport successfully!!!';
// });

/*
 * MIGRATE PARA CREAR EL NUEVO CAMPO AMOUNT EN VOUCHER
*/
// Route::get('/add-amount-to-vouchers', function () {
//     Artisan::call('make:migration', ['name' => 'add_amount_to_vouchers']);
//     return 'migrate add_amount_to_vouchers creado!';
// });

/*
 * MIGRATE PARA CREAR EL NUEVO CAMPO COST EN CLIENT-PROGRAMS
*/
// Route::get('/add_cost_to_client_programs', function () {
//     Artisan::call('make:migration', ['name' => 'add_cost_to_client_programs']);
//     return 'migrate add_cost_to_client_programs creado!';
// });

/*
*  CORRER MIGRACIONES
*/
// Route::get('/migrate', function () {
//     Artisan::call('migrate');
//     return 'migrate success!';
// });

/*
 * ASSISTANT
*/
// Route::get('/create-Assistant-model', function () {
//     Artisan::call('make:model', ['name' => 'Assistant', '-m' => true]);
//     Artisan::call('make:controller', ['name' => 'Assistant/AssistantController', '--api' => true]);
    
//     Artisan::call('make:request', ['name' => 'AssistantRequest']);
//     Artisan::call('make:resource', ['name' => 'AssistantResource']);
//     Artisan::call('make:resource', ['name' => 'AssistantCollection']);

    

//     return 'modelo assistant creado!, request creado, resource creado, resource collection creado';
// });

// Route::get('/migrate-assistants', function () {
//     Artisan::call('migrate');
//     return 'migrate success!';
// });