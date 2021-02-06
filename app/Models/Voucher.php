<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    const DEFAULT_STATE = 'pendiente'; // pendiente verificado

    // protected $table = "vouchers";

    protected $fillable = [
        'client_program_id',
        'name',
        'code',
        'image',
        'state',
        'description',
    ];

    public function clientProgram()
    {
        return $this->belongsTo(ClientProgram::class);
    }
}
