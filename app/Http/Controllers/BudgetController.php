<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    //GET /budget
    public function index() {
        $budget = Budget::all();
        return $budget;
    }

    //GET /budget/create
    public function create(Request $request){
        $create = Budget::create($request->all());
        return $create;
    }

    //GET /budget/{id}
    public function show($id) 
    {
        $budget = Budget::findOrFail($id);
        return $budget;
    }
    
    //PUT /budget/{id}
    public function update(Request $request, $id){
        $budget = Budget::findOrFail($id);
        $budget->update($request->all());
        return response()->json($budget, 200);
    }

    //DELETE /budget/{id}
    public function destroy($id){
        $budget = Budget::findOrFail($id);
        $budget->delete();
        return response()->json(null, 204);        
    }
}
