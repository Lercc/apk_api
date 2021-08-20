<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EqualCodeVouchersMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $vouchers;
    public $currentVoucher;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pVouchers, $pCurrentVoucher)
    {
        $this->subject = "🚨 posibles vouchers similares con código: $pCurrentVoucher->code";
        $this->vouchers = $pVouchers;
        $this->currentVoucher = $pCurrentVoucher;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.equalCodeVouchers');
    }
}
