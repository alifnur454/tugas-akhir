<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\DashboardController;
use App\Http\Controllers\IntrinsikController;

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


Route::get('/', function(){
    return view('appadmin.main');
});


// Route::get('/', function () {
//     return view('appadmin.main');
// });

Route::get('/p', function () {
    return view('welcome');
});



Route::get('/main', [IntrinsikController::class,'main']);

Route::get('/intrinsik/create', [IntrinsikController::class,'create']);
Route::post('/intrinsik/create', [IntrinsikController::class,'create2']);
Route::get('/intrinsik/{id}/store', [IntrinsikController::class,'store']);
Route::post('/intrinsik/{id}/update', [IntrinsikController::class,'update']);
Route::get('/intrinsik/{id}/delete', [IntrinsikController::class,'delete']);
