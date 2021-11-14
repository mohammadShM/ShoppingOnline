<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\PropertyGroupRequest;
use App\Models\PropertyGroup;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class PropertyGroupController extends Controller
{

    public function index(): void
    {

    }

    public function create(): Application|View|Factory
    {
        return view('admin.propertyGroup.index', [
            'propertyGroup' => PropertyGroup::all(),
        ]);
    }

    public function store(PropertyGroupRequest $request): RedirectResponse
    {
        PropertyGroup::query()->create([
            'title' => $request->get('title'),
        ]);
        return back();
    }

    public function show(PropertyGroup $propertyGroup): void
    {

    }

    public function edit(PropertyGroup $propertyGroup): Application|View|Factory
    {
        return view('admin.propertyGroup.edit', [
            'propertyGroup' => $propertyGroup,
        ]);
    }

    public function update(PropertyGroupRequest $request, PropertyGroup $propertyGroup): RedirectResponse|Application|Redirector
    {
        $propertyGroup->update([
            'title' => $request->get('title', $propertyGroup->title),
        ]);
        return redirect(route('propertyGroup.create'));
    }

    public function destroy(PropertyGroup $propertyGroup): void
    {

    }
}
