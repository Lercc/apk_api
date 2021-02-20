<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AplicantesExport implements FromView
{
    public $aplicantes;

    public function __construct($aplicantes)
    {
        $this->aplicantes = $aplicantes;
    }

    public function view(): View
    {
        return view('exports.aplicantes', [
            'aplicantes' => $this->aplicantes
        ]);
    }
}
