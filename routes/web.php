<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PerfumesController::class, 'index']);

Route::get('/', [PerfumesController::class, 'index']) -> name('perfumes.index');

Route::resource('perfumes', PerfumesController::class);


/* 
Route::get('/create', [PerfumesController::class, 'create']) -> name('perfumes.create');
Route::post('/create', [PerfumesController::class, 'store']) -> name('perfumes.store'); 
*/
