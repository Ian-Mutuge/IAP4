<?php
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentUnitsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentProfilesController;
use App\Mail\AcceptanceMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/redirects',[HomeController::class,"index"]);



Route::get('/Attendance',[StudentUnitsController::class,'index'])->name('Attendance');

Route::get('/Studentprofile',[StudentProfilesController::class,'primary'])->name('Studentprofile');

Route::get('/Staff',[StaffController::class,'primary'])->name('Studentprofile');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';

Route::get('/Staffprofile', function () {
    return view('Staffprofile');
});

Route::get('/email',function() {
  Mail::to('jciaciumia@yahoo.com')->send(new AcceptanceMail);
  return new AcceptanceMail();
  
});



