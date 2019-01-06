<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Services\PacienteService;

class PacienteController extends DefaultController
{
    public function __construct(PacienteService $service)
    {
        parent::__construct($service, PacienteRequest::class);
    }
}
