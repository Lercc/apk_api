<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;

use App\Exports\AplicantesResumeCostExport;
use App\Exports\AplicantesExport;
use App\Exports\LeadsCalificadosExport;
use App\Exports\LeadsAceptadosExport;
use App\Models\Lead;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ExportController extends Controller implements ShouldAutoSize
{
    public function exportAplicantesResumeCost($fecha) 
    {
        $aplicantes = Client:: select('clients.*')
                               ->join('client_programs', 'client_programs.client_id', '=', 'clients.id')
                               ->where('client_programs.season', '=', $fecha)
                               ->orderBy('clients.id', 'asc')
                               ->get(); 
        return Excel::download(new AplicantesResumeCostExport($aplicantes, $fecha), 'aplicantes.xlsx');
    }

    public function exportAplicantes($fecha) 
    {
        // $aplicantes = Client::where('created_at' ,'>=', $fecha)->orderBy('created_at','asc')->get();
        $aplicantes = Client:: select('clients.*')
                               ->join('client_programs', 'client_programs.client_id', '=', 'clients.id')
                               ->where('client_programs.season', '=', $fecha)
                               ->orderBy('clients.id', 'asc')
                               ->get(); 
        return Excel::download(new AplicantesExport($aplicantes, $fecha), 'aplicantes.xlsx');
    }
  
    public function exportLeads($fecha, $tabla) 
    {
        // return $fecha;
        $leads = Lead::where([
            [ 'table_name' ,'=', $tabla],
            [ 'created_at' ,'>=', $fecha]
        ])
        ->orderBy('created_at','asc')
        ->get();
        return Excel::download(new LeadsCalificadosExport($leads), 'leads.xlsx');
    }
    
   
    public function exportLeadsAceptados($fecha, $pipeline) 
    {
        if($pipeline == 'todos'){
            $leads = Lead::where([
                [ 'table_name' ,'=', 'aceptados'],
                [ 'created_at' ,'>=', $fecha]
            ])
            ->orderBy('created_at','asc')
            ->get();
        } else {
            $leads = Lead::where([
                [ 'table_name' ,'=', 'aceptados'],
                [ 'created_at' ,'>=', $fecha],
                [ 'pipeline_dispatch' ,'=', $pipeline],
            ])
            ->orderBy('created_at','asc')
            ->get();
        }
        return Excel::download(new LeadsAceptadosExport($leads), 'leadAceptados.xlsx');
    }
}
