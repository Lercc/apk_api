<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    const DEFAULT_STATE = 'activado'; //activado  desactivado

    protected $fillable = [
        'state',
        'tipo',
        'name',
        'description'
    ];

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}
