<?php

namespace App\Http\Controllers\clientController;

use App\Http\Controllers\Controller;

class indexController extends Controller
{

    public function index()
    {
        return view('client.index');
    }

}
