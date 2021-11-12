<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;

// use App\Http\Middleware\CheckPermission;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

// use Illuminate\Support\Facades\Gate;

class PanelController extends Controller
{

    public function __construct()
    {
//        // ====================== set custom middleware ======================
//        $this->middleware(CheckPermission::class . ":view-dashboard")
//            ->only('index');
    }

    public function index(): Factory|View|Application
    {
//        // ====================== use gate define in authproviders ======================
//        if (!Gate::allows('view-dashboard')) {
//            abort(403);
//        }
        return view('admin.index');
    }

}
