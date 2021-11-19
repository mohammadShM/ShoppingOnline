<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\FeaturedCategory;
use App\Models\Slider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class indexController extends Controller
{

    public function index(): Factory|View|Application
    {
        return view('client.index', [
            'sliders' => Slider::all(),
            'featuredCategory' => FeaturedCategory::getCategory(),
        ]);
    }

}
