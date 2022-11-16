<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//dalam folder AkunController
route::get('/akun', [AkunController::class, 'index'])->name('index-akun');
route::get('/akun/create', [AkunController::class, 'form'])->name('akun-create');

//dalam folder AccountController
route::get('/',        [AccountController::class, 'index']);
route::get('//create', [AccountController::class, 'create']);
route::get('//show',   [AccountController::class, 'show']);

//dalam folder TemplateController
route::get('/template/blank', [TemplateController::class, 'master']);

//dalam folder Table
route::get('/table', [TableController::class, 'table'])->name('createAkun');
route::get('/data', [TableController::class, 'data'])->name('data');


// Route::get('/student' , [SiswaController::class, 'index'])->name('StudentIndex');
// Route::get('/student/create' , [SiswaController::class, 'create'])->name('StudentCreate');
// Route::post('/student' , [SiswaController::class, 'store'])->name('StudentStore');
// Route::get('/student/{id}' , [SiswaController::class, 'show'])->name('StudentShow');
// Route::get('/student/{id}/edit' , [SiswaController::class, 'edit'])->name('StudentEdit');
// Route::put('/student/{id}/' , [SiswaController::class, 'update'])->name('StudentUpdate');
// Route::delete('/student/{id}' , [SiswaController::class, 'destroy'])->name('StudentDestroy');

// Route::Controller(SiswaController:: class)->group(function () {
// Route::get('/student' , 'index')->name('StudentIndex');
// Route::get('/student/create' , 'create')->name('StudentCreate');
// Route::post('/student' , 'store')->name('StudentStore');
// Route::get('/student/{id}' , 'show')->name('StudentShow');
// Route::get('/student/{id}/edit' , 'edit')->name('StudentEdit');
// Route::put('/student/{id}/' , 'update')->name('StudentUpdate');
// Route::delete('/student/{id}' , 'destroy')->name('StudentDestroy');
// });

    Route::resource('student', SiswaController::class);

    Route::resource('class', KelasController::class);