<?php

namespace App\Http\Controllers;

use App\Models\MasterCampaing;
use Illuminate\Http\Request;

class MasterCampaingController extends Controller
{
    //GET /mastercampaing
    public function index() {
        $master_campaing = MasterCampaing::all();
        return $master_campaing;
    }

    //GET /mastercampaing/create
    public function create(Request $request){
        $create = MasterCampaing::create($request->all());
        return $create;
    }

    //GET /mastercampaing/{id}
    public function show($id) 
    {
        $master_campaing = MasterCampaing::findOrFail($id);
        return $master_campaing;
    }
    
    //PUT /mastercampaing/{id}
    public function update(Request $request, $id){
        $master_campaing = MasterCampaing::findOrFail($id);
        $master_campaing->update($request->all());
        return response()->json($master_campaing, 200);
    }

    //DELETE /mastercampaing/{id}
    public function destroy($id){
        $master_campaing = MasterCampaing::findOrFail($id);
        $master_campaing->delete();
        return response()->json(null, 204);        
    }
}
