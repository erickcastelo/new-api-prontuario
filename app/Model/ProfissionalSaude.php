<?php

namespace App\Model;

use Illuminate\Support\Facades\Hash;

class ProfissionalSaude extends Pessoa
{
    protected $table = 'profissionalsaude';

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->datacriacao = date('Y-m-d H:i:s');
            $model->dataalteracao = date('Y-m-d H:i:s');
            $model->numero = date('Y') . '-'. $model->cpf . '-'. 'PR';
            $model->password = Hash::make($model->password);
        });

        self::updating(function ($model) {
            $model->dataalteracao = date('Y-m-d H:i:s');
        });
    }
}
