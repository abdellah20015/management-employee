<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\TotalLeaveController;
use App\Http\Controllers\ManagesalaryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DownloadController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/view/{id}', [UserController::class, 'view'])->name('user.view');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::get('user/search', [UserController::class, 'search'])->name('user.search');

    Route::get('employee', [EmployeeController::class, 'index'])->name('employee');
    Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');

    Route::get('designation', [DesignationController::class, 'index'])->name('designation');
    Route::get('designation/create', [DesignationController::class, 'create'])->name('designation.create');
    Route::post('designation/store', [DesignationController::class, 'store'])->name('designation.store');
    Route::get('designation/edit/{id}', [DesignationController::class, 'edit'])->name('designation.edit');
    Route::post('designation/update/{id}', [DesignationController::class, 'update'])->name('designation.update');
    Route::get('designation/delete/{id}', [DesignationController::class, 'delete'])->name('designation.delete');

    Route::get('department', [DepartmentController::class, 'index'])->name('department');
    Route::get('department/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('department/store', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::post('department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('department/delete/{id}', [DepartmentController::class, 'delete'])->name('department.delete');

    Route::get('salary', [SalaryController::class, 'index'])->name('salary');
    Route::get('salary/create', [SalaryController::class, 'create'])->name('salary.create');
    Route::post('salary/store', [SalaryController::class, 'store'])->name('salary.store');
    Route::get('salary/edit/{id}', [SalaryController::class, 'edit'])->name('salary.edit');
    Route::post('salary/update/{id}', [SalaryController::class, 'update'])->name('salary.update');
    Route::get('salary/delete/{id}', [SalaryController::class, 'delete'])->name('salary.delete');

    Route::get('city', [CityController::class, 'index'])->name('city');
    Route::get('city/create', [CityController::class, 'create'])->name('city.create');
    Route::post('city/store', [CityController::class, 'store'])->name('city.store');
    Route::get('city/edit/{id}', [CityController::class, 'edit'])->name('city.edit');
    Route::post('city/update/{id}', [CityController::class, 'update'])->name('city.update');
    Route::get('city/delete/{id}', [CityController::class, 'delete'])->name('city.delete');

    Route::get('shift', [ShiftController::class, 'index'])->name('shift');
    Route::get('shift/create', [ShiftController::class, 'create'])->name('shift.create');
    Route::post('shift/store', [ShiftController::class, 'store'])->name('shift.store');
    Route::get('shift/edit/{id}', [ShiftController::class, 'edit'])->name('shift.edit');
    Route::post('shift/update/{id}', [ShiftController::class, 'update'])->name('shift.update');
    Route::get('shift/delete/{id}', [ShiftController::class, 'delete'])->name('shift.delete');

    Route::get('leave', [LeaveController::class, 'index'])->name('leave');
    Route::get('leave/create', [LeaveController::class, 'create'])->name('leave.create');
    Route::post('leave/store', [LeaveController::class, 'store'])->name('leave.store');
    Route::get('leave/search', [LeaveController::class, 'search'])->name('leave.search');
    Route::post('leave/approve/{id}', [LeaveController::class, 'approve'])->name('leave.approve');
    Route::post('leave/paid/{id}', [LeaveController::class, 'paid'])->name('leave.paid');

    Route::get('total-leave', [TotalLeaveController::class, 'index'])->name('total-leave');
    Route::get('total-leave/create', [TotalLeaveController::class, 'create'])->name('total-leave.create');
    Route::post('total-leave/store', [TotalLeaveController::class, 'store'])->name('total-leave.store');
    Route::get('total-leave/edit/{id}', [TotalLeaveController::class, 'edit'])->name('total-leave.edit');
    Route::post('total-leave/update/{id}', [TotalLeaveController::class, 'update'])->name('total-leave.update');
    Route::get('total-leave/delete/{id}', [TotalLeaveController::class, 'delete'])->name('total-leave.delete');

    Route::get('managesalary', [ManagesalaryController::class, 'index'])->name('managesalary');
    Route::get('managesalary/detail/{id}', [ManagesalaryController::class, 'detail'])->name('managesalary.detail');
    Route::post('managesalary/store', [ManagesalaryController::class, 'store'])->name('managesalary.store');
    Route::get('managesalary/salarylist', [ManagesalaryController::class, 'salarylist'])->name('managesalary.salarylist');
    Route::get('managesalary/makepayment', [ManagesalaryController::class, 'makepayment'])->name('managesalary.makepayment');
    Route::post('managesalary/make-advance', [ManagesalaryController::class, 'makeAdvance'])->name('managesalary.makeadvance');

    Route::get('event', [EventController::class, 'event'])->name('event');
    Route::post('event/store', [EventController::class, 'store'])->name('event.store');

    Route::get('calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('calendar/add', [CalendarController::class, 'add'])->name('calendar.add');
    Route::post('calendar/store', [CalendarController::class, 'store'])->name('calendar.store');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('change-password', [ProfileController::class, 'changePassword'])->name('change.password');
    Route::match(['get', 'post'], 'update-password', [ProfileController::class, 'updatePassword'])->name('update.password');

    Route::get('downloads', [DownloadController::class, 'index'])->name('download');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');




