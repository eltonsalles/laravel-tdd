<?php

namespace App\Http\Controllers\Api;

use App\Account;
use App\Http\Controllers\ApiControllerTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = ['bank'];

    public function __construct(Account $model)
    {
        $this->model = $model;
    }
}
