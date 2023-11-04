<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Backend\JobVacancyController;
use App\Http\Controllers\Backend\DisplayJobVacancyController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\CenterPointController;
use App\Http\Controllers\Backend\DataController;

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

// USER MIDDLEWARE
Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [ProfileController::class, 'UserDashboard'])->name('user.user_index');
    Route::get('/user/profile', [ProfileController::class, 'UserProfile'])->name('user.user_profile');
    Route::post('/user/update', [ProfileController::class, 'UserUpdate'])->name('user.update');
    Route::get('/user/change/password', [ProfileController::class, 'UserChangePassword'])->name('user.change.password');
    Route::post('/user/update/password', [ProfileController::class, 'UserUpdatePassword'])->name('user.update.password');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/logout', [ProfileController::class, 'UserLogout'])->name('logout');
});

require __DIR__ . '/auth.php';

// Admin Change User Details
Route::middleware(['auth', 'role:admin'])->group(function () {

    /// Admin Group Middleware
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/update', [AdminController::class, 'AdminUpdate'])->name('admin.update');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
}); // End Group Admin Middleware

Route::middleware(['auth', 'role:agent'])->group(function () {

    /// Agent Group Middleware
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
}); // End Group Agent Middleware

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

//Admin Job Vacancy CRUD
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(JobVacancyController::class)->group(function () {
        /// Admin Group Middleware
        Route::get('/all/jobs', 'AllJobs')->name('all.jobs');
        Route::get('/add/job', 'AddJob')->name('add.job');
        Route::post('/store/job', 'StoreJob')->name('store.job');
        Route::get('/edit/job/{id}', 'EditJob')->name('edit.job');
        Route::post('/update/job', 'UpdateJob')->name('update.job');
        Route::get('/delete/job/{id}', 'DeleteJob')->name('delete.job');
        Route::post('/update-job-status/{id}', 'updateJobStatus')->name('update.job.status');
    });
}); // End Group Admin Middleware

//Admin Branch Locator CRUD
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(BranchController::class)->group(function () {
        /// Admin Group Middleware
        Route::get('/all/branches', 'AllBranches')->name('all.branches');
        Route::get('/branches/markers', 'Markers')->name('markers');
        Route::get('/branches/circles', 'Circles')->name('circles');
        Route::get('/branches/polygons', 'Polygon')->name('polygons');
        Route::get('/branches/layers', 'Layer')->name('layers');
        Route::get('/branches/layergroup', 'LayerGroup')->name('layergroup');
        Route::get('/branches/get-coordinates', 'GetCoordinates')->name('getcoordinates');
        
        ## Route CenterPoint
        Route::get('/all/centerpoint', [CenterPointController::class, 'AllCenterPoint'])->name('all.centerpoint');
        Route::get('/centerpoint/data', [\App\Http\Controllers\Backend\DataController::class, 'centerpoint'])->name('centerpoint.data');
        Route::resource('centerpoint', (\App\Http\Controllers\Backend\CenterPointController::class));
        Route::get('/edit/centerpoint/{id}', [CenterPointController::class, 'EditCenterPoint'])->name('edit.centerpoint');
        Route::post('/update/centerpoint', [CenterPointController::class, 'UpdateCenterPoint'])->name('update.centerpoint');
        Route::get('/delete/job/{id}', [CenterPointController::class, 'DeleteCenterPoint'])->name('delete.centerpoint');

        ## Route Spot
        Route::get('/spot/data', [\App\Http\Controllers\Backend\DataController::class, 'spot'])->name('spot.data');
        Route::resource('spot', (\App\Http\Controllers\Backend\SpotController::class));
        Route::put('/spot/{spot}', [\App\Http\Controllers\Backend\SpotController::class, 'update'])->name('spot.update');

    });
}); // End Group Admin Middleware




// ------------------------------------- USER DISPLAY ---------------------------------------->
/// User Job Vacancy
Route::controller(JobVacancyController::class)->group(function () {
    Route::get('/job-vacancies', 'DisplayAllJobs')->name('job-vacancies');
    Route::get('/whitesands', 'UserHome')->name('whitesands');
    Route::get('/user/all_jobs', 'UserAllJobs')->name('user.all.jobs');
});
