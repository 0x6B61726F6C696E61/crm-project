<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Index;
use App\Http\Livewire\Create;
use App\Http\Livewire\Update;
use App\Http\Livewire\Destroy;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Index::class);
Route::get('/dodaj-kontakt', Create::class);