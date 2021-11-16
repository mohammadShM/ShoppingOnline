<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function create(): Factory|View|Application
    {
        return view('client.register.create');
    }

    /**
     * @throws Exception
     */
    public function sendMail(Request $request): Redirector|Application|RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
        $user = User::genarateOtp($request);
        return redirect(route('client.register.otp', $user));
    }

    public function otp(User $user): Factory|View|Application
    {
        return view('client.register.verifyOtp', [
            'user' => $user,
        ]);
    }

    public function verifyOtp(Request $request, User $user): Redirector|Application|RedirectResponse
    {
        $this->validate($request, [
            'otp' => 'required|max:5|min:5|lte:99999|gte:11111',
        ]);
        if (!Hash::check($request->get('otp'), $user->password)) {
            return back()->withErrors(['otp' => 'کد وارد شده صحیح نیست!!']);
        }
        auth()->login($user);
        return redirect(route('client.index'));
    }

    public function logout(): RedirectResponse|Application|Redirector
    {
        auth()->logout();
        return redirect(route('client.index'));
    }

}
