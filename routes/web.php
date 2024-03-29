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
use App\Http\Controllers\OpportunitiesController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FundsController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
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
// Route::get('/about', [HomeController::class, 'index']);
// Route::post('/saveAbout', [HomeController::class, 'saveAbout']);
// Route::get('/editAbout/{id}', [HomeController::class, 'editAbout']);
// Route::get('/updateAbout/{id}', [HomeController::class, 'updateAbout']);

Route::get('/Categories', [CategoriesController::class, 'index']);
// Route::get('/Categories', [CategoriesController::class, 'showCat']);
Route::post('/saveCat', [CategoriesController::class, 'store']);
Route::get('/editCat/{id}', [CategoriesController::class, 'edit']);
Route::post('/updateCat/{id}', [CategoriesController::class, 'update']);
Route::get('/catDelete/{id}', [CategoriesController::class, 'destroy']);

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
Route::get('/cars', [CarsController::class, 'CarsView']);
Route::POST('/saveCar', [CarsController::class, 'store']);
Route::get('/editCar/{id}', [CarsController::class, 'edit']);
Route::post('/saveCarEdit/{id}', [CarsController::class, 'update']);
Route::get('/deleteCar/{id}', [CarsController::class, 'destroy']);


Route::get('/Funds', [FundsController::class, 'index']);
Route::get('/funds', [FundsController::class, 'create']);
Route::post('/fundsSave', [FundsController::class, 'store']);
Route::get('/deleteFund/{id}', [FundsController::class, 'destroy']);
Route::get('/fundsView', [FundsController::class, 'fundsView']);
Route::get('/editfund/{id}', [FundsController::class, 'edit']);
Route::post('/saveFund/{id}', [FundsController::class, 'update']);


Route::get('/Services', [ServicesController::class, 'viewService']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/createService', [ServicesController::class, 'create']);
Route::post('/saveService', [ServicesController::class, 'store']);
Route::get('/editService/{id}', [ServicesController::class, 'edit']);
Route::post('/updateService/{id}', [ServicesController::class, 'update']);
Route::get('/deleteService/{id}', [ServicesController::class, 'destroy']);

Route::get('/Partners', [AuctionsController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/Others', [OthersController::class, 'index']);
Route::get('/others', [OthersController::class, 'create']);
Route::post('/saveOther', [OthersController::class, 'store']);
Route::get('/editOther/{id}', [OthersController::class, 'edit']);
Route::post('/updateOther/{id}', [OthersController::class, 'update']);
Route::get('/deleteOther/{id}', [OthersController::class, 'destroy']);

Route::get('/Business', [BusinessController::class, 'index']);
Route::get('/businesses', [BusinessController::class, 'displayBusiness']);
Route::get('/business', [BusinessController::class, 'create']);
Route::post('/saveBusiness', [BusinessController::class, 'store']);
Route::get('/editBusiness/{id}', [BusinessController::class, 'edit']);
Route::post('/updateBusiness/{id}', [BusinessController::class, 'update']);
Route::get('/deleteBusiness/{id}', [BusinessController::class, 'destroy']);

Route::get('/Hotels', [HotelsController::class, 'index']);
Route::get('/hotels', [HotelsController::class, 'create']);
Route::post('/saveHotel', [HotelsController::class, 'store']);
Route::get('/delete/{id}', [HotelsController::class, 'destroy']);
Route::get('/editHotel/{id}', [HotelsController::class, 'edit']);
Route::post('/updateHotel/{id}', [HotelsController::class, 'update']);

Route::get('/Opportunities', [OpportunitiesController::class, 'index']);
Route::get('/opportunities', [OpportunitiesController::class, 'create']);
Route::post('/saveOport', [OpportunitiesController::class, 'store']);
Route::get('/deleteOport/{id}', [OpportunitiesController::class, 'destroy']);
Route::get('/editOport/{id}', [OpportunitiesController::class, 'edit']);
Route::post('/updateOport/{id}', [OpportunitiesController::class, 'update']);

Route::post('/sendMessage', [MessagesController::class, 'store']);
Route::get('/Contactus', [MessagesController::class, 'index']);
Route::post('/contactus', [MessagesController::class, 'store']);
Route::get('/mails', [MessagesController::class, 'mails']);
Route::get('/reply/{id}', [MessagesController::class, 'reply']);

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

Route::get('/about', [AboutController::class, 'index']);
Route::post('/saveAbout', [AboutController::class, 'saveAbout']);
Route::get('/editAbout/{id}', [AboutController::class, 'editAbout']);
Route::post('/updateAbout/{id}', [AboutController::class, 'updateAbout']);

Route::get('/companies', [CompaniesController::class, 'index']);
Route::get('/Companies', [CompaniesController::class, 'show']);
Route::post('/saveCompany', [CompaniesController::class, 'store']);
Route::get('/editcompany/{id}', [CompaniesController::class, 'edit']);
Route::post('/updateCompany/{id}', [CompaniesController::class, 'update']);

Route::get('/employees', [EmployeesController::class, 'index']);
Route::get('/JobSeekers', [EmployeesController::class, 'viewEmployee']);
Route::post('/saveEmployee', [EmployeesController::class, 'store']);
Route::get('/editEmployee/{id}', [EmployeesController::class, 'edit']);
Route::post('/updateEmployee/{id}', [EmployeesController::class, 'update']);
Route::get('/deleteEmployee/{id}', [EmployeesController::class, 'destroy']);
