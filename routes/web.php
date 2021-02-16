<?php

use App\Http\Controllers\Login\LoginController;
use App\Models\Voucher;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\VoucherRegistradoMailable;

use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * mail 
 */

// Route::get('/', function () {
    //     $content = Voucher::find(rand(1,50));
    //     return view('mail.voucherRegistered', compact('content'));
    // });
    
    // Route::get('/enviar', function () {
        //     $voucher = Voucher::find(rand(1,50));
        //     Mail::to(['lercc.en@gmail.com', 'rokekanto@gmail.com'])->queue(new VoucherRegistradoMailable($voucher));
        //     return 'enviado';
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
