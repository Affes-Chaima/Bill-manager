<?php

use App\Http\Controllers\BillsController;
use App\Http\Controllers\SetmethController;
use App\Http\Controllers\SettlementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TVAController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BillLineController;
use App\Http\Controllers\ClientsController;



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

Route::get('/', function () {
    return view('welcome');});
Auth::routes();
Route::resources(['bills'=>BillsController::class,'blines'=>BillLineController::class,'articles'=>ArticlesController::class,'clients'=>ClientsController::class,'tvas'=>TVAController::class,'settlement'=>SettlementController::class,'setmethod'=>SetmethController::class]);
Route::get('dashboard',[HomeController::class,'index']);
