<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    const DEFAULT_STATE = 'activado'; // activado - desactivado
    
    protected $fillable = [
        'name',
        'state',
        'description'
    ];

      public function clientPrograms()
    {
        return $this->hasMany(ClientProgram::class);
    }

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
