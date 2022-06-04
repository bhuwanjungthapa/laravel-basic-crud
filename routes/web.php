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
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/gallery', function () {
//     return view('gallery');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
//   //sta+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++tic
// Route::get('/contact/ram', function () {
//     return "Hello";
// });

//dynamic
//  Route::get('hello/{name}', function ($name) {
//      return "hello $name";
// });
// Route::get('me',[\App\Http\Controllers\MyController::class,'getMe']);

// Route::get('printMe',[\App\Http\Controllers\MyController::class,'printMe']);

Route::get('about',[\App\Http\Controllers\MyController::class,'aboutMe']);
Route::get('contact',[\App\Http\Controllers\MyController::class,'contactMe']);
Route::get('service',[\App\Http\Controllers\MyController::class,'serviceMe']);
Route::get('gallery',[\App\Http\Controllers\MyController::class,'galleryMe']);
//route to enter a data
Route::get('employee/create',[\App\Http\Controllers\employeeController::class,'create'])->name('employee.create');
//route to store data to database
Route::post('employee/store',[\App\Http\Controllers\employeeController::class,'store'])->name('employee.store');
//route to all employee list
Route::get('employee',[\App\Http\Controllers\employeeController::class,'index'])->name('employee.index');
Route::get('employee/{id}',[\App\Http\Controllers\employeeController::class,'show'])->name('employee.show');

Route::delete('employee/{id}',[\App\Http\Controllers\employeeController::class,'destroy'])->name('employee.destroy');
Route::get('employee/{id}/edit',[\App\Http\Controllers\employeeController::class,'edit'])->name('employee.edit');
Route::put('employee/{id}',[\App\Http\Controllers\employeeController::class,'update'])->name('employee.update');


Route::get('product/create',[\App\Http\Controllers\productController::class,'create'])->name('product.create');
//route to store data to database
Route::post('product/store',[\App\Http\Controllers\productController::class,'store'])->name('product.store');
//route to all employee list
Route::get('product',[\App\Http\Controllers\productController::class,'index'])->name('product.index');
Route::get('product/{id}',[\App\Http\Controllers\productController::class,'show'])->name('product.show');






