<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{

    public function store(Request $request): Response|Application|ResponseFactory
    {
        return response($request->all(), 200);
    }

}
