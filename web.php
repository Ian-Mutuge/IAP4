<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\departmentapplicants;

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

Route::get('/application', function () {
    return view('application');
});

Route::get('/applydepartment', function () {
    return view('applydepartment');
});

Route::get('/applicants', function () {
    return view('applicants');
});


Route::get('applicants',[ApplicantController::class, 'show']);

Route::post('application', [App\Http\Controllers\ApplicantController::class, 'store']);

Route::post('applydepartment', [App\Http\Controllers\departmentapplicants::class, 'store']);