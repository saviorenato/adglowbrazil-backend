<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Shop;
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
        $shops = Shop::all()->pluck('code','id');
        return view('user.create', compact('roles','users', 'shops'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'role_id' => 'required'
        ],[
            'role_id.required' => 'Select the type field'
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

        $user->shops()->sync($request->get('shops'));
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
        $shops = Shop::all()->pluck('code','id');
        return view('user.edit', compact(['user','roles','users','shops']));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'role_id' => 'required'
        ],[
            'role_id.required' => 'Select the type field'
        ]);

        if($request->filled('password')){
            $user->password = \Hash::make($request->get('password'));
        }
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->update();
        $user->shops()->sync($request->get('shops'));
        session()->flash('message','Usuário editado com sucesso');
        return redirect()->route('user.index');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            session()->flash('message','Usuário excluído com sucesso');
        }catch (\Exception $exception){
            session()->flash('error','Este usuário não pode ser excluído');
        }
        return redirect()->route('user.index');
    }
}
