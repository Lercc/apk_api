<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LeadsAceptadosExport implements FromView
{
    public $leads;

    public function __construct($leads)
    {
        $this->leads = $leads;
    }

    public function view(): View
    {
        return view('exports.leadsAceptados', [
            'leads' => $this->leads
        ]);
    }
}
