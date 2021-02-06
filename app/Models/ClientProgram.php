<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ClientProgram extends Model
{
    use HasFactory;

    const DEFAULT_STATE = 'activo'; //  activo - terminado 

    protected $fillable = [
        'client_id',
        'program_id',
        'season',
        'state',
        'description'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }
}
