<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    const DEFAULT_STATE = 'pendiente'; // pendiente verificado

    public function clientProgram()
    {
        return $this->belongsTo(ClientProgram::class);
    }
}
