<?php

namespace App\Http\Controllers\clientController;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class indexController extends Controller
{

    public function index(): Factory|View|Application
    {
        return view('client.index');
    }

}
