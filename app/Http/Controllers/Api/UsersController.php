<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiControllerTrait;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    use ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(User $model)
    {
        $this->model = $model;
    }
}
