<?php


use App\Http\Controllers\Api\Fund_AgencyController;
use App\Http\Controllers\Api\Fund_ApplicationController;
use App\Http\Controllers\Api\Fund_CategoryController;
use App\Http\Controllers\Api\Opportunity_ApplicationController;
use App\Http\Controllers\Api\Opportunity_CategoryController;
use App\Http\Controllers\Api\OpportunityController;
use App\Http\Controllers\Api\Partnership_ApplicationController;
// use App\Http\Controllers\Api\Partnership_ApplicationController;

use App\Http\Controllers\Api\PartnershipController;
use App\Http\Controllers\Api\ProjectController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//opportunity category routes


Route::prefix('opp_category')->name('opp_category.')->group( function () {

    Route::controller(Opportunity_CategoryController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});
Route::prefix('opportunity')->name('opportunity.')->group( function () {

    Route::controller(OpportunityController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});
Route::prefix('opp_app')->name('opp_app.')->group( function () {

    Route::controller(Opportunity_ApplicationController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});
Route::prefix('part')->name('part.')->group( function () {

    Route::controller(PartnershipController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});

Route::prefix('part_app')->name('part_app.')->group( function () {

    Route::controller(Partnership_ApplicationController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});
Route::prefix('fund_agency')->name('fund_agency.')->group( function () {

    Route::controller(Fund_AgencyController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});

Route::prefix('fund_app')->name('fund_app.')->group( function () {

    Route::controller(Fund_ApplicationController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});

Route::prefix('fund_cat')->name('fund_cat.')->group( function () {

    Route::controller(Fund_CategoryController::class)->group( function () {
        Route::get('/index' , 'index')->name('index');
        // Route::get('/create' , 'create')->name('create');
        Route::post('/store' , 'store')->name('store');
        Route::get('/show/{id}' , 'show')->name('show');
        Route::post('/update/{id}' , 'update')->name('update');
        Route::get('/delete/{id}' , 'delete')->name('delete');
    });
});
Route::prefix('search')->name('search.')->group( function () {

    Route::controller(ProjectController::class)->group( function () {
        Route::get('/' , 'search')->name('search');

    });
});

