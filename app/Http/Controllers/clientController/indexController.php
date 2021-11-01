<?php

namespace App\Http\Controllers\clientController;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;

class indexController extends Controller
{

    public function index()
    {
        return view('client.index');
    }

}
