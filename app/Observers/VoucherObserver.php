<?php

namespace App\Observers;

use App\Mail\VoucherRegistradoMailable;
use App\Mail\EqualCodeVouchersMailable;
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

            $codeTrim = ltrim(rtrim($voucher->code, '0'), '0');
            $equalCodesVouchers = Voucher::where('code', 'like', "%$codeTrim%")->get();

            if (sizeof($equalCodesVouchers) > 1) {
                Mail::to($emails)->queue(new EqualCodeVouchersMailable($equalCodesVouchers, $voucher));
            }
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
