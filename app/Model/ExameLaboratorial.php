<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExameLaboratorial extends Model
{
    protected $table = 'examelaboratorial';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = [
        'numero', 'descricao', 'possui',
        'observacao',
    ];
}
