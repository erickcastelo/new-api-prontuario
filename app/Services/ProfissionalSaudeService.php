<?php

namespace App\Services;

use App\Model\ProfissionalSaude;

class ProfissionalSaudeService extends BaseService
{
    public function __construct()
    {
        parent::__construct(ProfissionalSaude::class);
    }
}