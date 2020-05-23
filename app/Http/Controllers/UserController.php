<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);

        $data = $request->all();
        $data['password'] = \Hash::make($data['password']);
        User::create($data);
        $request->session()->flash('message','Usuário criado com sucesso');
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
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
