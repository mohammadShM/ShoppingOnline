<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\UserCreateRequest;
use App\Http\Requests\AdminRequest\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('admin.users.index', [
            'users' => User::paginate(10),
        ]);
    }

    public function store(UserCreateRequest $request)
    {

    }

    public function show(User $user)
    {

    }

    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        // for unique in email for update
        $isEmailUnique = User::query()->where('email', '=', $request->get('email'))
            ->where('id', '!=', $user->id)->exists();
        if ($isEmailUnique) {
            return back()->withErrors(['ایمیل انتخابی تکراری است !']);
        }
        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'role_id' => $request->get('role_id'),
        ]);
        return redirect(route('user.create'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
