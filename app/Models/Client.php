<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'dni',
        'name',
        'surnames',
        'mobile',
        'email',
        'profile',
        'commentary'
    ];

    public function getFullinfoAttribute() {
        return "{$this->name} {$this->surnames} - {$this->dni}";
    }

    public function clientPrograms()
    {
        return $this->hasMany(ClientProgram::class)->orderBy('id','desc');
    }
}
