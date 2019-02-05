<?php

namespace App\Services;

use App\Model\Consulta;

class ConsultaService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Consulta::class);
    }
}