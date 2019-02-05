<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfissionalSaudeRequest;
use App\Services\ProfissionalSaudeService;

class ProfissionalSaudeController extends DefaultController
{
    public function __construct(ProfissionalSaudeService $service)
    {
        parent::__construct($service, ProfissionalSaudeRequest::class);
    }
}
