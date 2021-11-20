<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\OfferRequest;
use App\Models\Offer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class OfferController extends Controller
{

    public function index(): void
    {

    }

    public function create(): Application|View|Factory
    {
        return view('admin.offers.index', [
            'offers' => Offer::all(),
        ]);
    }

    public function store(OfferRequest $request): RedirectResponse
    {
        $start_at = Offer::start_at($request);
        $end_at = Offer::end_at($request);
        Offer::query()->create([
            'code' => $request->get('code'),
            'start_at' => $start_at,
            'end_at' => $end_at,
        ]);
        return back();
    }

    public function show(Offer $offer): void
    {

    }

    public function edit(Offer $offer): Application|View|Factory
    {
        return view('admin.offers.edit', [
            'offer' => $offer,
        ]);
    }

    public function update(OfferRequest $request, Offer $offer): RedirectResponse
    {
        $offerUnique = Offer::query()->where('code', $request->get('code'))
            ->where('id', '!=', $offer->id)->exists();
        if ($offerUnique) {
            return back()->withErrors(['کد تخفیف قبلا انتخاب شده است .']);
        }
        $start_at = Offer::start_at($request);
        $end_at = Offer::end_at($request);
        $offer->update([
            'code' => $request->get('code'),
            'start_at' => $start_at,
            'end_at' => $end_at,
        ]);
        return redirect(route('offer.create'));
    }

    public function destroy(Offer $offer): void
    {

    }
}
