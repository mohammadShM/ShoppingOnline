<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{

    public function index(): void
    {

    }

    public function create(): Application|View|Factory
    {
        return view('admin.sliders.index', [
            'sliders' => Slider::all(),
        ]);
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'link' => 'required|string',
            'image' => 'required|mimes:jpeg,jpg,png,svg|image|min:10|max:4096',
        ]);
        if ($request->file('image')) {
            $pathName = "SLIDER_" . time() . "_" . random_int(111111, 999999) . "_"
                . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/image-sliders', $pathName);
            Slider::query()->create([
                "link" => $request->get('link'),
                "image" => $path,
            ]);
        }
        return back();
    }

    public function show(Slider $slider): void
    {

    }

    public function edit(Slider $slider): Application|View|Factory
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * @throws Exception
     */
    public function update(Request $request, Slider $slider): RedirectResponse|Application|Redirector
    {
        $this->validate($request, [
            'link' => 'required|string',
            'image' => 'nullable|mimes:jpeg,jpg,png,svg|image|min:10|max:4096',
        ]);
        $path = $slider->image;
        if ($request->hasFile('image')) {
            if (Storage::exists($path)) {
                // remove image in storage directory
                Storage::delete($path);
            }
            if ($request->file('image')) {
                $pathName = "SLIDER_" . time() . "_" . random_int(111111, 999999) . "_"
                    . $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('public/image-sliders', $pathName);
            }
        }
        $slider->update([
            "link" => $request->get('link'),
            "image" => $path,
        ]);
        return redirect(route('slider.create'));
    }

    public function destroy(Slider $slider): RedirectResponse
    {
        // remove image in public directory
        // unlink(str_replace('public', 'storage', $slider->image));
        Storage::delete($slider->image);
        $slider->delete();
        return back();
    }
}
