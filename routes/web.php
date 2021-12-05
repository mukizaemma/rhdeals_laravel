<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TendersController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\PlotsController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AuctionsController;
use App\Http\Controllers\MessagesController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/Categories', [CategoriesController::class, 'index']);
Route::get('/category', [CategoriesController::class, 'create']);
Route::post('/saveCat', [CategoriesController::class, 'store']);

Route::get('/Tenders', [TendersController::class, 'index']);
Route::get('/tendersView', [TendersController::class, 'tendersView']);
Route::get('/tenders', [TendersController::class, 'create']);
Route::post('/saveTender', [TendersController::class, 'store']);


Route::get('/houses', [HousesController::class, 'index']);
Route::get('/Houses', [HousesController::class, 'housetable']);
Route::POST('/saveHouse', [HousesController::class, 'store']);
Route::get('/housesView', [HousesController::class, 'housesView']);

Route::get('/Plots', [PlotsController::class, 'index']);
Route::get('/plots', [PlotsController::class, 'create']);
Route::POST('/savePlot', [PlotsController::class, 'store']);

Route::get('/Cars', [CarsController::class, 'index']);
Route::get('/CarsView', [CarsController::class, 'CarsView']);
Route::POST('/saveCar', [CarsController::class, 'store']);


Route::get('/Auctions', [AuctionsController::class, 'index']);
Route::get('/auctions', [AuctionsController::class, 'create']);
Route::post('/auctionsSave', [AuctionsController::class, 'store']);


Route::get('/Services', [AuctionsController::class, 'index']);

Route::get('/Partners', [AuctionsController::class, 'index']);

Route::get('/Talents', [AuctionsController::class, 'index']);

Route::get('/Hotels', [AuctionsController::class, 'index']);

Route::post('/sendMessage', [MessagesController::class, 'store']);
Route::get('/Contactus', [MessagesController::class, 'index']);
Route::post('/contactus', [MessagesController::class, 'store']);
