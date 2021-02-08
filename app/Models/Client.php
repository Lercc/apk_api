<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'surnames',
        'mobile',
        'email',
        'profile',
        'commentary'
    ];

    public function clientPrograms()
    {
        return $this->hasMany(ClientProgram::class)->orderBy('id','desc');
    }
}
