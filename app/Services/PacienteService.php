<?php

namespace App\Services;

use App\Model\Paciente;

class PacienteService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Paciente::class);
    }
}