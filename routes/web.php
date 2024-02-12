<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;

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

route::get('/',[Homecontroller::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[Homecontroller::class,'redirect']);

route::get('/view_catagory',[Admincontroller::class,'view_catagory']);

route::post('/add_catagory',[Admincontroller::class,'add_catagory']);

route::get('/delete_catagory/{id}',[Admincontroller::class,'delete_catagory']);

route::get('/view_product',[Admincontroller::class,'view_product']);