<?php

use App\Http\Controllers\Login\LoginController;
use App\Models\Voucher;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\VoucherRegistradoMailable;
// Route::get('/', function () {
//     return view('welcome');
// });

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
 * login
 */
