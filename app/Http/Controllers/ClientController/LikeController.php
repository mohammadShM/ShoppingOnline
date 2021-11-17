<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): Factory|View|Application
    {
        return view('client.profile.index', [
            'products' => auth()->user()->likes,
        ]);
    }

    /** @noinspection PhpUnusedParameterInspection */
    public function store(Request $request, Product $product): Response|Application|ResponseFactory
    {
        if (!auth()->check() || !auth()->user()) {
            return response(['msg' => 'user is not loggedIn', 500]);
        }
        auth()->user()->likeProduct($product);
        return response(['msg' => 'liked', 200]);
    }

}
