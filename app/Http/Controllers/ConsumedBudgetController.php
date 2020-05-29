<?php

namespace App\Http\Controllers;

use App\Models\ConsumedBudget;
use Illuminate\Http\Request;

class ConsumedBudgetController extends Controller
{
    //GET /consumebudget
    public function index() {
        $consume_budget = ConsumedBudget::all();
        return $consume_budget;
    }

    //GET /consumebudget/create
    public function create(Request $request){
        $create = ConsumedBudget::create($request->all());
        return $create;
    }

    //GET /consumebudget/{id}
    public function show($id) 
    {
        $consume_budget = ConsumedBudget::findOrFail($id);
        return $consume_budget;
    }
    
    //PUT /consumebudget/{id}
    public function update(Request $request, $id){
        $consume_budget = ConsumedBudget::findOrFail($id);
        $consume_budget->update($request->all());
        return response()->json($consume_budget, 200);
    }

    //DELETE /consumebudget/{id}
    public function destroy($id){
        $consume_budget = ConsumedBudget::findOrFail($id);
        $consume_budget->delete();
        return response()->json(null, 204);        
    }
}
