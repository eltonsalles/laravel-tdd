<?php

namespace App\Http\Controllers\Api;

use App\Bank;
use App\Http\Controllers\ApiControllerTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BanksController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(Bank $model)
    {
        $this->model = $model;
    }
}
