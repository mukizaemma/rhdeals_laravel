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
use App\Http\Controllers\JobsCotroller;
use App\Http\Controllers\TalentsController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\BarsController;
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
Route::get('/deleteTender/{id}', [TendersController::class, 'destroy']);
Route::get('/editTender/{id}', [TendersController::class, 'editTender']);
Route::post('/updateTender/{id}', [TendersController::class, 'updateTender']);


Route::get('/houses', [HousesController::class, 'index']);
Route::get('/Houses', [HousesController::class, 'housetable']);
Route::POST('/saveHouse', [HousesController::class, 'store']);
Route::get('/HousesView', [HousesController::class, 'housesView']);
Route::get('/deleteHouse/{id}', [HousesController::class, 'destroy']);
Route::get('/houseEdit/{id}', [HousesController::class, 'edit']);
Route::post('/houseUpdate/{id}', [HousesController::class, 'update']);

Route::get('/Plots', [PlotsController::class, 'index']);
Route::get('/plots', [PlotsController::class, 'create']);
Route::POST('/savePlot', [PlotsController::class, 'store']);
Route::get('/deletePlot/{id}', [PlotsController::class, 'destroy']);
Route::get('/plotsView', [PlotsController::class, 'plotsView']);
Route::get('/plotEdit/{id}', [PlotsController::class, 'edit']);
Route::post('/PlotSave/{id}', [PlotsController::class, 'update']);

Route::get('/Cars', [CarsController::class, 'index']);
Route::get('/CarsView', [CarsController::class, 'CarsView']);
Route::POST('/saveCar', [CarsController::class, 'store']);


Route::get('/Auctions', [AuctionsController::class, 'index']);
Route::get('/auctions', [AuctionsController::class, 'create']);
Route::post('/auctionsSave', [AuctionsController::class, 'store']);
Route::get('/deleteAuction/{id}', [AuctionsController::class, 'destroy']);
Route::get('/auctionsView', [AuctionsController::class, 'auctionsView']);
Route::get('/editAuction/{id}', [AuctionsController::class, 'edit']);
Route::post('/saveAuction/{id}', [AuctionsController::class, 'update']);


Route::get('/Services', [AuctionsController::class, 'index']);

Route::get('/Partners', [AuctionsController::class, 'index']);

Route::get('/Talents', [AuctionsController::class, 'index']);

Route::get('/Hotels', [HotelsController::class, 'index']);
Route::get('/hotels', [HotelsController::class, 'create']);
Route::post('/saveHotel', [HotelsController::class, 'store']);
Route::get('/delete/{id}', [HotelsController::class, 'destroy']);
Route::get('/editHotel/{id}', [HotelsController::class, 'edit']);
Route::post('/updateHotel/{id}', [HotelsController::class, 'update']);

Route::get('/BarsResto', [BarsController::class, 'index']);
Route::get('/barResto', [BarsController::class, 'create']);
Route::post('/saveBar', [BarsController::class, 'store']);
Route::get('/delete/{id}', [BarsController::class, 'destroy']);
Route::get('/editBar/{id}', [BarsController::class, 'edit']);
Route::post('/updateBar/{id}', [BarsController::class, 'update']);

Route::post('/sendMessage', [MessagesController::class, 'store']);
Route::get('/Contactus', [MessagesController::class, 'index']);
Route::post('/contactus', [MessagesController::class, 'store']);

Route::get('/jobs', [JobsCotroller::class, 'index']);
Route::get('/Jobs', [JobsCotroller::class, 'josVIew']);
Route::post('/saveJob', [JobsCotroller::class, 'store']);
Route::get('/jobDelete/{id}', [JobsCotroller::class, 'destroy']);
Route::get('/jobEdit/{id}', [JobsCotroller::class, 'edit']);
Route::post('/jobSave/{id}', [JobsCotroller::class, 'update']);

Route::get('/Talents', [TalentsController::class, 'index']);
Route::get('/talents', [TalentsController::class, 'create']);
Route::get('/delete/{id}', [TalentsController::class, 'destroy']);
Route::post('/saveTalent', [TalentsController::class, 'store']);
Route::get('/editTalent/{id}', [TalentsController::class, 'edit']);
Route::post('/updateTalent/{id}', [TalentsController::class, 'update']);

Route::get('/business', [BusinessController::class, 'index']);
Route::get('/createBusiness', [BusinessController::class, 'create']);
Route::get('/addBusiness', [BusinessController::class, 'store']);
