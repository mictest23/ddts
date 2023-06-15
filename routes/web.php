<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route Admin
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[HomeController::class, 'adminHome'])->name("admin.home");
    Route::get("/admin/accounts",[HomeController::class, 'adminAccounts'])->name("admin.accounts");
});


// Route DARAB
Route::middleware(['auth','user-role:darab'])->group(function()
{
    Route::get("/darab/home",[HomeController::class, 'darabHome'])->name("darab.home");
});


// Route Legal
Route::middleware(['auth','user-role:legal'])->group(function()
{
    Route::get("/legal/home",[HomeController::class, 'legalHome'])->name("legal.home");
});


// Route Records
Route::middleware(['auth','user-role:records'])->group(function()
{
    Route::get("/records/home",[HomeController::class, 'recordsHome'])->name("records.home");
});


// Route Personnel
Route::middleware(['auth','user-role:personnel'])->group(function()
{
    Route::get("/personnel/home",[HomeController::class, 'personnelHome'])->name("personnel.home");
});


// Route Planning
Route::middleware(['auth','user-role:planning'])->group(function()
{
    Route::get("/planning/home",[HomeController::class, 'planningHome'])->name("planning.home");
});


// Route GSU
Route::middleware(['auth','user-role:gsu'])->group(function()
{
    Route::get("/gsu/home",[HomeController::class, 'gsuHome'])->name("gsu.home");
});


// Route Cashering
Route::middleware(['auth','user-role:cashering'])->group(function()
{
    Route::get("/cashering/home",[HomeController::class, 'casheringHome'])->name("cashering.home");
});


// Route Budget
Route::middleware(['auth','user-role:budget'])->group(function()
{
    Route::get("/budget/home",[HomeController::class, 'budgetHome'])->name("budget.home");
});


// Route Accounting
Route::middleware(['auth','user-role:accounting'])->group(function()
{
    Route::get("/accounting/home",[HomeController::class, 'accountingHome'])->name("accounting.home");
});
