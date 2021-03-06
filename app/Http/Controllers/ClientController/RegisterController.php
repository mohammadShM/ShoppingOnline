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

    // for save email
    public function create(): Factory|View|Application
    {
        return view('client.register.create');
    }

    // for send code to email
    /**
     * @throws Exception
     */
    public function sendMail(Request $request): Redirector|Application|RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);
//        // Temporary for me ======================================================================================
//        /** @var User $userLogin */
//        $userLogin = User::where('email', $request->get('email'))->first();
//        if (isset($userLogin)) {
//            auth()->login($userLogin);
//            return redirect(route('client.index'));
//        }
//        // Temporary for me ======================================================================================
        $user = User::genarateOtp($request);
        return redirect(route('client.register.otp', $user));
    }

    // for check code in email
    public function otp(User $user): Factory|View|Application
    {
        return view('client.register.verifyOtp', [
            'user' => $user,
        ]);
    }

    // for check code in email
    public function verifyOtp(Request $request, User $user): Redirector|Application|RedirectResponse
    {
        $this->validate($request, [
            'otp' => 'required|max:5|min:5|lte:99999|gte:11111',
        ]);
        if (!Hash::check($request->get('otp'), $user->password)) {
            return back()->withErrors(['otp' => 'کد وارد شده صحیح نیست!!']);
        }
        auth()->login($user);
        return redirect(route('client.changeUserPassword.edit'));
    }

    // for user exist
    public function logout(): RedirectResponse|Application|Redirector
    {
        auth()->logout();
        return redirect(route('client.index'));
    }

    // for save password
    public function changeUserPassword_edit(): Factory|View|Application
    {
        return view('client.register.changePassword.create');
    }

    // for save password
    public function changeUserPassword_update(Request $request): Redirector|Application|RedirectResponse
    {
        $request->validate([
            'password' => 'required|confirmed|min:6|max:25',
        ]);
        if (auth()->check() && auth()->user()) {
            auth()->user()->update([
                'password' => bcrypt($request->get('password')),
            ]);
        }
        return redirect(route('client.index'));
    }

}
