<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';
    public $timestamps = false;

    protected $fillable = [
        'id', 'sigla', 'nome',
    ];
}
