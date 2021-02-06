<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'surnames',
        'mobile',
        'email',
        'career_id',
        'semester',
        'institution_id',
        'english_level',
        'program_id',
        'communication_channel',
        'schedule_start',
        'schedule_start_meridiem',
        'schedule_end',
        'schedule_end_meridiem',
        'commentary',
        'profile',
        'pipeline_dispatch',
        'table_name',
        'career_id',
        'institution_id',
        'program_id'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
   
    public function career()
    {
        return $this->belongsTo(Career::class);
    }

    public function getScheduleDurationAttribute(){
        return  "$this->schedule_start $this->schedule_start_meridiem a $this->schedule_end $this->schedule_end_meridiem ";
    }
}
