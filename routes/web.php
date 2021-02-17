<?php

use App\Http\Controllers\Login\LoginController;
use App\Models\Voucher;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\VoucherRegistradoMailable;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * mail 
 */

// Route::get('/', function () {
//         $content = Voucher::find(50);
//         return view('mail.voucherRegistered', compact('content'));
//     });
    
// Route::get('/enviar', function () {
//         $voucher = Voucher::find(51);
//         Mail::to(['lercc.en@gmail.com', 'rokekanto@gmail.com'])->queue(new VoucherRegistradoMailable($voucher));
//         return 'enviado';
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

// Route::get('/clear', function () {
//     Storage::deleteDirectory('public');
//     Storage::makeDirectory('public');

//     Artisan::call('route:clear');
//     Artisan::call('storage:link', [] );
// });