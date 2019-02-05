<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consulta';
    public $timestamps = false;

    protected $fillable = [
        'datacriacao','dataconsulta',
        'descricao', 'situacao', 'codpaciente',
        'codprofissionalsaude'
    ];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->datacriacao = date('Y-m-d H:i:s');
            $model->situacao = 'P';
        });
    }
}
