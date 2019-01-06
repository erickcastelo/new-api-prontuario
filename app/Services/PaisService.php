<?php

namespace App\Services;

use App\Model\Pais;

class PaisService extends BaseService
{
    public function __construct()
    {
        parent::__construct(Pais::class);
    }
}