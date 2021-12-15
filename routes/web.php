<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClinicsController;
use App\Http\Controllers\ProfileController;


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


Route::get('/', [HomeController::class, "index"]);
Route::get('/redirects', [HomeController::class, "redirects"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/users', [AdminController::class, "users"]);
Route::get('/deleteuser/{id}', [AdminController::class, "deleteuser"]);
Route::get('/role/{id}', [AdminController::class, "role"]);


Route::get('/clinics', [HomeController::class, "clinics"]);

// Route::get('/profile/{id}', [ProfileController::class, "profile"]);
Route::get('/completeaccount/{id}', [ProfileController::class, "completeaccount"]);
Route::post('/updatecompleteaccount/{id}', [ProfileController::class, "updatecompleteaccount"]);
Route::get('/viewClinics/{id}', [ProfileController::class, "viewClinics"]);



Route::post('/addrole/{id}', [ClinicsController::class, "addrole"]);
Route::get('/filter', [ClinicsController::class, "filter"]);
Route::get('/searchclinics', [ClinicsController::class, "searchclinics"]);
Route::get('/clinic-table', [ClinicsController::class, "clinicTable"]);

