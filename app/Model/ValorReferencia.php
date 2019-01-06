<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorReferencia extends Model
{
    protected $table = 'valorreferencia';
    public $timestamps = false;

    protected $fillable = [
        'id', 'faixaetaria', 'intervalo1',
        'referencial', 'unidade', 'numeroexamelaboratorial'
    ];
}
