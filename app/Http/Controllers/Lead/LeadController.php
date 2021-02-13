<?php

namespace App\Http\Controllers\Lead;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeadRequest;
use App\Http\Resources\LeadCollection;
use App\Http\Resources\LeadResource;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function show (Lead $lead) {
        return new LeadResource($lead);
    }

    /**
     * Store no protegido por el middleware auth
     */
    public function store(LeadRequest $request)
    {
        // $lead = new Lead($request->validated());
        // $lead->pipeline_dispatch = 'no';
        // $lead->table_name = 'calificados';
        // $lead->save();

        //refactoring
        $lead = Lead::create($request->validated());
     
        return new LeadResource($lead);
    }


    /**
     * INDEX
     */
    public function indexCalificados()
    {
        $leads = Lead::where('table_name', '=', 'calificados')
            ->orderBy('id','desc')
            ->paginate(10);

        return new LeadCollection($leads);
    }

    public function indexAceptados()
    {
        $leads = Lead::where('table_name', '=', 'aceptados')
            ->orderBy('id','desc')
            ->paginate(10);

        // $pipeline = 'todos';
        // return view('private.leads.aceptados', compact('leads','pipeline'));
        return new LeadCollection($leads);
    }

    public function indexAceptadosEnviado()
    {
        $leads = Lead::where([
                ['table_name', '=', 'aceptados'],
                ['pipeline_dispatch', '=', 'si'],
            ])
            ->orderBy('id','desc')
            ->paginate(10);

        // $pipeline = 'si';
        // return view('private.leads.aceptados', compact('leads','pipeline'));
        return new LeadCollection($leads);
    }

    public function indexAceptadosNoEnviado()
    {
        $leads = Lead::where([
                ['table_name', '=', 'aceptados'],
                ['pipeline_dispatch', '=', 'no'],
            ])
            ->orderBy('id','desc')
            ->paginate(10);
        
        // $pipeline = 'no';
        // return view('private.leads.aceptados', compact('leads','pipeline'));
        return new LeadCollection($leads);
    }

    public function indexEdad()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'edad')
            ->orderBy('id','desc')
            ->paginate(10);

        return new LeadCollection($leads);
    }

    public function indexIngles()
    {
        // $leads = Lead::where('table_name', '=', 'aceptados')->paginate(2);
        $leads = Lead::where('table_name', '=', 'ingles')
            ->orderBy('id','desc')
            ->paginate(10);

        return new LeadCollection($leads);
    }


    /**
     * UPDATE GENERAL
     */
    public function update(Request $request, Lead $lead)
    {
         $more_rules = [
                'name'                      => ['required', 'string', 'max:40', 'regex:/^[\pL\s\-]+$/u'],
                'surnames'                  => ['required', 'string', 'max:60', 'regex:/^[\pL\s\-]+$/u'],
                'mobile'                    => ['required', 'digits:9', 'numeric'],
                'career_id'                 => ['required'],
                'semester'                  => ['required', 'string', 'max:9'],
                'institution_id'            => ['required'],
                'english_level'             => ['required', 'string', 'max:20'],
                'program_id'                => ['required'],
                'communication_channel'     => ['required', 'string', 'max:20'],
                'schedule_start'            => ['required', 'min:1', 'max:11', 'numeric'],
                'schedule_start_meridiem'   => ['required', 'string', 'max:2'],
                'schedule_end'              => ['required', 'min:1', 'max:11', 'numeric'],
                'schedule_end_meridiem'     => ['required', 'string', 'max:2'],

                'commentary'                => ['nullable'],
                'profile'                   => ['nullable'],
        ];

        // TRIGGER: cambio en DNI 
        if($request->dni == $lead->dni){
            $rules = ['dni' => ['required','digits:8', 'numeric']];

            if($request->email == $lead->email){
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255']];
           
            } else if ($request->email != $lead->email) {
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255', 'unique:leads,email']];
                
            }

            $rules = $rules + $more_rules;
            $this->validate($request,$rules);
        
        } else if($request->dni != $lead->dni) {
            $rules = [ 'dni' => ['required','digits:8', 'numeric', 'unique:leads,dni']];

            if($request->email != $lead->email){
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255', 'unique:leads,email']];
            
            } else if($request->email == $lead->email){
                $rules = $rules + ['email' => ['required', 'string', 'email', 'max:255']];
            }
            $rules = $rules + $more_rules;
            $this->validate($request,$rules);
        }

        $lead->update($request->all());
        return new LeadResource($lead);
    }


   /**
     * UPDATE PARTICULARS
     */
    public function updateQualifiedTable(Lead $lead)
    {
        // $lead->update($request->all());
        $lead->table_name = 'calificados';
        $lead->save();

        return response()->json(['message' => 'Registro enviado correctamente a la TABLA CALIFICADOS']);
    }

    public function updateAceptedTable(Lead $lead)
    {
        // $lead->update($request->all());
        $lead->table_name = 'aceptados';
        $lead->save();

        return response()->json(['message' => 'Registro enviado correctamente a la TABLA PERFILES ACEPTADOS']);
    }

    public function updateAgeTable(Lead $lead)
    {
        // $lead->update($request->all());
        $lead->table_name = 'edad';
        $lead->save();

        return response()->json(['message' => 'Registro enviado correctamente a la TABLA EDAD']);
    }

    public function updateEnglishTable(Lead $lead)
    {
        // $lead->update($request->all());
        $lead->table_name = 'ingles';
        $lead->save();
 
        return response()->json(['message' => 'Registro enviado correctamente a la TABLA INGLÉS']);
    }

    public function updatePipeline(Lead $lead, $pPipe)
    {
        $lead->pipeline_dispatch = $pPipe;
        $lead->save();

        if($pPipe == 'si') {
            return response()->json(['message' =>'El estado del registro fue cambiado a ENVIADO']);
        } else {
            return response()->json(['message' =>'El estado del registro fue cambiado a NO ENVIADO']);
        }
    }


    /**
     *  DELETE GENERAL LEADS
     */
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return response()->json(null, 204);
    }
}
