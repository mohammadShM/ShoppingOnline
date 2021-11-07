<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

/** @noinspection PhpMissingReturnTypeInspection */

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\RoleRequest;
use App\Models\Permission;
use App\Models\Role;

class RoleController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('admin.roles.index', [
            'roles' => Role::paginate(10),
            'permissions' => Permission::all(),
        ]);
    }

    public function store(RoleRequest $request)
    {
        $role = Role::create([
            'title' => $request->get('title'),
        ]);
        $role->permissions()->attach($request->get('permissions'));
        return redirect(route('role.create'));
    }

    public function show(Role $role)
    {

    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => Permission::all(),
        ]);
    }

    public function update(RoleRequest $request, Role $role)
    {
        $role->update([
            'title' => $request->get('title'),
        ]);
        $role->permissions()->sync($request->get('permissions'));
        return redirect(route('role.create'));
    }

    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();
        return back();
    }
}
