<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;

///////////////////// Admin ///////////////////////////
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SubServiceController;
use App\Http\Controllers\Admin\PortfolioController;



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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/all-services', [ServicesController::class, 'index'])->name('service');
Route::get('/services/sub-services/{id}', [ServicesController::class, 'subservice'])->name('subservice');



Auth::routes();
Route::group(['prefix'=>'dashboard','middleware'=>['auth','is_admin']],function (){
    
    Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
    Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
    Route::get('{any}', [RoutingController::class, 'root'])->name('any');

    ////////////////// services ///////////////////
    Route::get('{first}/{second}/{third}/services', [ServiceController::class, 'index'])->name('servicesIndex');
    Route::get('{first}/{second}/{third}/services/create', [ServiceController::class, 'create'])->name('servicesCreate');
    Route::post('{first}/{second}/{third}/services/store', [ServiceController::class, 'store'])->name('servicesStore');
    Route::get('{first}/{second}/{third}/services/show', [ServiceController::class, 'show'])->name('servicesShow');
    Route::get('{first}/{second}/{third}/services/edit/{id}', [ServiceController::class, 'edit'])->name('servicesEdit');
    Route::POST('{first}/{second}/{third}/services/update', [ServiceController::class, 'update'])->name('servicesUpdate');
    Route::get('{first}/{second}/{third}/services/destroy/{id}', [ServiceController::class, 'destroy'])->name('servicesDestroy');
        
    ////////////////// sub services ///////////////////
    Route::get('{first}/{second}/{third}/subservices', [SubServiceController::class, 'index'])->name('subservicesIndex');
    Route::get('{first}/{second}/{third}/subservices/create', [SubServiceController::class, 'create'])->name('subservicesCreate');
    Route::post('{first}/{second}/{third}/subservices/store', [SubServiceController::class, 'store'])->name('subservicesStore');
    Route::get('{first}/{second}/{third}/subservices/show', [SubServiceController::class, 'show'])->name('subservicesShow');
    Route::get('{first}/{second}/{third}/subservices/edit/{id}', [SubServiceController::class, 'edit'])->name('subservicesEdit');
    Route::POST('{first}/{second}/{third}/subservices/update', [SubServiceController::class, 'update'])->name('subservicesUpdate');
    Route::get('{first}/{second}/{third}/subservices/destroy/{id}', [SubServiceController::class, 'destroy'])->name('subservicesDestroy');
        
    ////////////////// portfolio ///////////////////
    Route::get('{first}/{second}/{third}/portfolio', [PortfolioController::class, 'index'])->name('portfolioIndex');
    Route::get('{first}/{second}/{third}/portfolio/create', [PortfolioController::class, 'create'])->name('portfolioCreate');
    Route::post('{first}/{second}/{third}/portfolio/store', [PortfolioController::class, 'store'])->name('portfolioStore');
    Route::get('{first}/{second}/{third}/portfolio/show', [PortfolioController::class, 'show'])->name('portfolioShow');
    Route::get('{first}/{second}/{third}/portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolioEdit');
    Route::POST('{first}/{second}/{third}/portfolio/update', [PortfolioController::class, 'update'])->name('portfolioUpdate');
    Route::get('{first}/{second}/{third}/portfolio/destroy/{id}', [PortfolioController::class, 'destroy'])->name('portfolioDestroy');
        

    ////////////////// settings ///////////////////
    Route::get('{first}/{second}/{third}/settings', [SettingController::class, 'index'])->name('settingsIndex');
    Route::get('{first}/{second}/{third}/settings/create', [SettingController::class, 'create'])->name('settingsCreate');
    Route::post('{first}/{second}/{third}/settings/store', [SettingController::class, 'store'])->name('settingsStore');
    Route::get('{first}/{second}/{third}/settings/show', [SettingController::class, 'show'])->name('settingsShow');
    Route::get('{first}/{second}/{third}/settings/edit/{id}', [SettingController::class, 'edit'])->name('settingsEdit');
    Route::POST('{first}/{second}/{third}/settings/update', [SettingController::class, 'update'])->name('settingsUpdate');
    Route::get('{first}/{second}/{third}/settings/destroy/{id}', [SettingController::class, 'destroy'])->name('settingsDestroy');   
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('home');
