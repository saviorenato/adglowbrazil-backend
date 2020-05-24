<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('sup','role')->get();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all()->pluck('name','id');
        $users = User::all()->pluck('name','id');
        return view('user.create', compact('roles','users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        $role = Role::find($request->get('role_id'));
        $sup = User::find($request->get('parent_id'));

        $user = new User();
        $user->password = \Hash::make($request->get('password'));
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->role()->associate($role);
        $user->sup()->associate($sup);
        $user->save();
        $request->session()->flash('message','Usuário criado com sucesso');
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles = Role::all()->pluck('name','id');
        $users = User::all()->pluck('name','id');
        return view('user.edit', compact(['user','roles','users']));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        $data = $request->all();
        $data['password'] = \Hash::make($data['password']);
        $user->update($data);
        session()->flash('message','Usuário editado com sucesso');
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('message','Usuário excluído com sucesso');
        return redirect()->route('user.index');
    }
}
