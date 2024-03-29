<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AplicantesResumeCostExport implements FromView, ShouldAutoSize
{
    public $aplicantes;
    public $season;

    public function __construct($aplicantes, $fecha)
    {
        $this->aplicantes = $aplicantes;
        $this->season = $fecha;
    }

    public function view(): View
    {
        return view('exports.aplicantesResumeCost', [
            'aplicantes' => $this->aplicantes,
            'season' => $this->season
        ]);
    }
}
