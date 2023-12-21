<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/digimons',[App\Http\Controllers\DigimonController::class, 'digimonList']); // Get all digimons 
Route::get('/digimon/{id}',[App\Http\Controllers\DigimonController::class, 'showDigimon']); // Get one digimon