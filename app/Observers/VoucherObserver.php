<?php

namespace App\Observers;

use App\Mail\VoucherRegistradoMailable;
use App\Models\Voucher;
use Illuminate\Support\Facades\Mail;

class VoucherObserver
{
 
    public function created(Voucher $voucher)
    {
        if (!\App::runningInConsole()) {
            Mail::to(['lercc.en@gmail.com', 'rokekanto@gmail.com'])->queue(new VoucherRegistradoMailable($voucher));
        }
    }

 
    // public function updated(Voucher $voucher)
    // {
    //     //
    // }

    // public function deleted(Voucher $voucher)
    // {
    //     //
    // }


    // public function restored(Voucher $voucher)
    // {
    //     //
    // }

    // public function forceDeleted(Voucher $voucher)
    // {
    //     //
    // }
}
