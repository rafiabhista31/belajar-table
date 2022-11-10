<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TableController;

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
route::get('/account',        [AccountController::class, 'index']);
route::get('/account/create', [AccountController::class, 'create']);
route::get('/account/show',   [AccountController::class, 'show']);

//dalam folder TemplateController
route::get('/template/blank', [TemplateController::class, 'master']);

//dalam folder Table
route::get('/table', [TableController::class, 'table'])->name('createAkun');
route::get('/data', [TableController::class, 'data'])->name('data');
