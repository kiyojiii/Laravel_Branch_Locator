<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\JobVacancyController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function(){

    /// Admin Group Middleware
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/update', [AdminController::class, 'AdminUpdate'])->name('admin.update');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

}); // End Group Admin Middleware

Route::middleware(['auth', 'role:agent'])->group(function(){

    /// Agent Group Middleware
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');

}); // End Group Agent Middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

//Admin Job Vacancy Route
Route::middleware(['auth', 'role:admin'])->group(function(){

Route::controller(JobVacancyController::class)->group(function(){
      /// Admin Group Middleware
      Route::get('/all/jobs', 'AllJobs')->name('all.jobs');
      Route::get('/add/job', 'AddJob')->name('add.job');
      Route::post('/store/job', 'StoreJob')->name('store.job');
});

}); // End Group Admin Middleware