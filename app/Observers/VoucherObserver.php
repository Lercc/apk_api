<?php

namespace App\Observers;

use App\Mail\VoucherRegistradoMailable;
use App\Models\User;
use App\Models\Voucher;
use Illuminate\Support\Facades\Mail;

class VoucherObserver
{
 
    public function created(Voucher $voucher)
    {
        if (!\App::runningInConsole()) {

            $users_type_employee = User::Role(['employee'])->get();
            $emails = [];
            foreach ($users_type_employee as $key => $user) {
                array_push($emails, $user->email);
            }

            Mail::to($emails)->queue(new VoucherRegistradoMailable($voucher));
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
