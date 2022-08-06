<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $permission = Permission::create(['name'=>'edit post']);
        // $role = Role::findById(1);
        // $permission = Permission::findById(1);
        // $role->givePermissionTo($permission);
        // $permission->removeRole($role);
        // $role->revokePermissionTo($permission);
        // Role::create(['name'=>'writer']);
        // $permission = Permission::create(['name'=>'write post']);
        // $role = Role::findById(1);
        // $role->givePermissionTo($permission);
        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('writer');
        // return auth()->user()->permissions;
        // return User::role('writer')->get();
        return view('home');
    }
}
