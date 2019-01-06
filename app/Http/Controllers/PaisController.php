<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaisRequest;
use App\Services\PaisService;

class PaisController extends DefaultController
{
   public function __construct(PaisService $service)
   {
       parent::__construct($service, PaisRequest::class);
   }
}
