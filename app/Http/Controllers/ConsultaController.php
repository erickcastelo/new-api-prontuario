<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultaRequest;
use App\Services\ConsultaService;

class ConsultaController extends DefaultController
{
    public function __construct(ConsultaService $service)
    {
        parent::__construct($service, ConsultaRequest::class);
    }
}
