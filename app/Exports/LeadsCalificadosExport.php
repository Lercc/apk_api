<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LeadsCalificadosExport implements FromView
{
    public $leads;

    public function __construct($leads)
    {
        $this->leads = $leads;
    }

    public function view(): View
    {
        return view('exports.leadsCalificados', [
            'leads' => $this->leads
        ]);
    }
}
