<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::all();
        return view('shop.index', compact('shops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        $shop = new Shop();
        $shop->code  = $request->get('code');
        $shop->name  = $request->get('name');
        $shop->name_normalized   = Str::slug($request->get('name'));
        $shop->status    = 'active';
        $shop->type  = $request->get('type');
        $shop->attributes    = [];
        $shop->enabled   = 1;
        $shop->save();
        $request->session()->flash('message','Loja criada com sucesso');
        return redirect()->route('shop.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('shop.show', compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('shop.edit', compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|max:255',
            'type' => 'required|max:255',
        ]);

        $shop->code  = $request->get('code');
        $shop->name  = $request->get('name');
        $shop->name_normalized   = Str::slug($request->get('name'));
        $shop->status    = 'active';
        $shop->type  = $request->get('type');
        $shop->attributes    = [];
        $shop->enabled   = 1;
        $shop->update();

        return redirect()->route('shop.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $shop->delete();
        session()->flash('message','Loja excluída com sucesso');
        return redirect()->route('shop.index');
    }
}
