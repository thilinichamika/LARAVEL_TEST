<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/redirects', [App\Http\Controllers\HomeController::class, 'index']);

//zone//
Route::get('/zoneAll', [App\Http\Controllers\ZoneController::class, 'zoneAll'])->middleware('auth')->name('zoneAll');
Route::get('/zoneAdd', [App\Http\Controllers\ZoneController::class, 'zoneAdd'])->middleware('auth')->name('zoneAdd');
Route::post('zstore/', [App\Http\Controllers\ZoneController::class, 'zstore'])->name('zstore');
Route::put('zoneEdit/{zone}', [App\Http\Controllers\ZoneController::class, 'zupdate'])->name('zupdate');
Route::get('zoneEdit/{zone}', [App\Http\Controllers\ZoneController::class, 'zoneEdit'])->name('zoneEdit');
Route::delete('zoneAll/{zone}', [App\Http\Controllers\ZoneController::class, 'destroy'])->name('destroy');

//region//
Route::get('/regionAll', [App\Http\Controllers\RegionController::class, 'regionAll'])->middleware('auth')->name('regionAll');
Route::get('/regionAdd', [App\Http\Controllers\RegionController::class, 'regionAdd'])->middleware('auth')->name('regionAdd');
Route::get('regionEdit/{region}', [App\Http\Controllers\RegionController::class, 'regionEdit'])->name('regionEdit');
Route::delete('regionAll/{region}', [App\Http\Controllers\RegionController::class, 'rdestroy'])->name('rdestroy');
Route::post('rstore/', [App\Http\Controllers\RegionController::class, 'rstore'])->name('rstore');
Route::put('regionEdit/{region}', [App\Http\Controllers\RegionController::class, 'rupdate'])->name('rupdate');

//territory//
Route::get('/territoryAll', [App\Http\Controllers\TerritoryController::class, 'territoryAll'])->middleware('auth')->name('territoryAll');
Route::get('/territoryAdd', [App\Http\Controllers\TerritoryController::class, 'territoryAdd'])->middleware('auth')->name('territoryAdd');
Route::get('/territoryEdit/{territory}', [App\Http\Controllers\TerritoryController::class, 'territoryEdit'])->middleware('auth')->name('territoryEdit');
Route::delete('territoryAll/{territory}', [App\Http\Controllers\TerritoryController::class, 'tdestroy'])->name('tdestroy');
Route::post('tstore/', [App\Http\Controllers\TerritoryController::class, 'tstore'])->name('tstore');
Route::put('territoryEdit/{territory}', [App\Http\Controllers\TerritoryController::class, 'tupdate'])->name('tupdate');

//user//
Route::get('/userAll', [App\Http\Controllers\UserController::class, 'userAll'])->middleware('auth')->name('userAll');
Route::get('/userAdd', [App\Http\Controllers\UserController::class, 'userAdd'])->middleware('auth')->name('userAdd');
Route::get('/userEdit/{user}', [App\Http\Controllers\UserController::class, 'userEdit'])->middleware('auth')->name('userEdit');
Route::delete('userAll/{user}', [App\Http\Controllers\UserController::class, 'udestroy'])->name('udestroy');
Route::post('ustore/', [App\Http\Controllers\UserController::class, 'ustore'])->name('ustore');
Route::put('userEdit/{user}', [App\Http\Controllers\UserController::class, 'uUpdate'])->name('uUpdate');

//product//
Route::get('/productAll', [App\Http\Controllers\ProductController::class, 'productAll'])->middleware('auth')->name('productAll');
Route::get('/productAdd', [App\Http\Controllers\ProductController::class, 'productAdd'])->middleware('auth')->name('productAdd');
Route::get('/productEdit/{product}', [App\Http\Controllers\ProductController::class, 'productEdit'])->middleware('auth')->name('productEdit');
Route::delete('productAll/{product}', [App\Http\Controllers\ProductController::class, 'pdestroy'])->name('pdestroy');
Route::post('pstore/', [App\Http\Controllers\ProductController::class, 'pstore'])->name('pstore');
Route::put('productEdit/{product}', [App\Http\Controllers\ProductController::class, 'pupdate'])->name('pupdate');

//order//
Route::get('/orderAll', [App\Http\Controllers\OrderController::class, 'orderAll'])->middleware('auth')->name('orderAll');
Route::get('/orderAdd', [App\Http\Controllers\OrderController::class, 'orderAdd'])->middleware('auth')->name('orderAdd');

Route::get('/orderAllUser', [App\Http\Controllers\OrderController::class, 'orderAllUser'])->middleware('auth')->name('orderAllUser');
Route::get('/orderAddUser', [App\Http\Controllers\OrderController::class, 'orderAddUser'])->middleware('auth')->name('orderAddUser');

