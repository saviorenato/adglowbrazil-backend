<?php

namespace App\Http\Controllers;

use App\Models\Campaing;
use Illuminate\Http\Request;

class CampaingController extends Controller
{
    //GET /campaing
    public function index() {
        $campaing = Campaing::all();
        return $campaing;
    }

    //GET /campaing/create
    public function create(Request $request){
        $create = Campaing::create($request->all());
        return $create;
    }

    //GET /campaing/{id}
    public function show($id) 
    {
        $campaing = Campaing::findOrFail($id);
        return $campaing;
    }
    
    //PUT /campaing/{id}
    public function update(Request $request, $id){
        $campaing = Campaing::findOrFail($id);
        $campaing->update($request->all());
        return response()->json($campaing, 200);
    }

    //DELETE /campaing/{id}
    public function destroy($id){
        $campaing = Campaing::findOrFail($id);
        $campaing->delete();
        return response()->json(null, 204);        
    }
}
