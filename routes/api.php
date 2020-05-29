<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('mastercampaing', 'MasterCampaingController');
Route::resource('campaing', 'CampaingController');
Route::resource('budget', 'BudgetController');
Route::resource('consumebudget', 'ConsumedBudgetController');
