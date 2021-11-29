<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest\LoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Symfony\Component\HttpFoundation\RedirectResponse as RedirectResponseGoogle;

class LoginController extends Controller
{

    public function create(): Factory|View|Application
    {
        return view('client.register.login.create');
    }

    public function store(LoginRequest $request): Redirector|Application|RedirectResponse
    {
        /** @var User $user */
        $user = User::query()->where('email', $request->get('email'))->firstOrFail();
        if (!Hash::check($request->get('password'), $user->password)) {
            return back()->withErrors('نام کاربری یا کلمه عبور مطابقت ندارد .');
        }
        auth()->login($user);
        return redirect(route('client.index'));
    }

    public function redirectToProvider(): RedirectResponseGoogle
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            /** @var User $userQuery */
            $userQuery = User::query()->where('email', $user->email)->first();
            if ($userQuery) {
                if ($userQuery->avatar === null) {
                    $userQuery->update([
                        'avatar' => $user->getAvatar(),
                        'google_id' => $user->getId(),
                    ]);
                }
                auth()->login($userQuery);
            } else {
                $newUser = User::query()->create([
                    'role_id' => 2,
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => bcrypt('normal-user'),
                    'avatar' => $user->getAvatar(),
                    'google_id' => $user->getId(),
                ]);
                auth()->login($newUser);
            }
            return redirect('/');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

}
