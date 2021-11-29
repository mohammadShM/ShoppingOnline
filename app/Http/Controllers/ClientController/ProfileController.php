<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function edit(): Factory|View|Application
    {
        return view('client.profile.myProfile.edit');
    }

    public function update(Request $request): RedirectResponse
    {
        if ($request->get('name') && auth()->user()) {
            $request->validate([
                'name' => 'required|string|min:5|max:30',
            ]);
            auth()->user()->update([
                'name' => $request->get('name'),
            ]);
        } else {
            return back()->withErrors('درخواست نا معتبر است .');
        }
        return back();
    }

    public function changePassword_edit(): Factory|View|Application
    {
        return view('client.profile.myProfile.changePassword.edit');
    }

    public function changePassword_update(Request $request): Redirector|Application|RedirectResponse
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6|max:25',
            'password_confirmation' => 'required',
        ]);
        /** @var User $user */
        $user = auth()->user();
        if (!Hash::check($request->get('old_password'), $user->password)) {
            return back()->withErrors('رمز فعلی مطابقت ندارد');
        }
        $user->update([
            'password' => bcrypt($request->get('password')),
        ]);
        return redirect(route('client.myProfile.edit'))->with('successPassword', 'رمز عبور با موفقیت تغییر کرد .');
    }

}
