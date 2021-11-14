<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\PropertyRequest;
use App\Models\Property;
use App\Models\PropertyGroup;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class PropertyController extends Controller
{

    public function index(): void
    {

    }

    public function create(): Application|View|Factory
    {
        return view('admin.properties.index', [
            'properties' => Property::all(),
            'propertyGroup' => PropertyGroup::all(),
        ]);
    }

    public function store(PropertyRequest $request): RedirectResponse
    {
        Property::query()->create([
            'title' => $request->get('title'),
            'property_group_id' => $request->get('property_group_id'),
        ]);
        return back();
    }

    public function show(Property $property): void
    {

    }

    public function edit(Property $property): Application|View|Factory
    {
        return view('admin.properties.edit', [
            'property' => $property,
            'propertyGroup' => PropertyGroup::all(),
        ]);
    }

    public function update(PropertyRequest $request, Property $property): RedirectResponse|Application|Redirector
    {
        // Both are one
        $property->update($request->validated());
//        $property->update([
//            'title' => $request->get('title'),
//            'property_group_id' => $request->get('property_group_id'),
//        ]);
        return redirect(route('properties.create'));
    }

    public function destroy(Property $property): void
    {

    }
}
