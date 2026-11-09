<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontent\MainController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\backend\PropertiesController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminRegisterController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\RegisterController;
use App\Http\Controllers\backend\CustomForgotController;
use App\Http\Controllers\backend\DetailController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/register');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/user/register', [RegisterController::class, 'store'])->name('register.process');

Route::get('/admin/register', [AdminRegisterController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminRegisterController::class, 'store'])->name('admin.register.process');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/user/login', [LoginController::class, 'store'])->name('login.process');

Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'store'])->name('admin.process');

Route::get('forgot-password', [CustomForgotController::class, 'showForm'])->name('custom.forgot');
Route::post('forgot-password', [CustomForgotController::class, 'sendConfirmation'])->name('custom.forgot.send');
Route::get('confirm-reset/{token}', [CustomForgotController::class, 'showResetForm'])->name('custom.confirm.reset');
Route::post('reset-password', [CustomForgotController::class, 'updatePassword'])->name('custom.password.update');

Route::middleware(['auth'])->group(function () {
   Route::post('/user/logout', [LoginController::class, 'logout'])->name('logout');

   Route::get('/index', [MainController::class, 'index'])->name('home.index');
   Route::get('/about', [MainController::class, 'about'])->name('about.index');
   Route::get('/services', [MainController::class, 'services'])->name('services.index');
   Route::get('/contact', [MainController::class, 'contact'])->name('contact.index');
   Route::get('/blogpost', [MainController::class, 'blogpost'])->name('blogpost.index');
   Route::get('/singlepost', [MainController::class, 'singlepost'])->name('singlepost.index');
   Route::get('/landingpage', [MainController::class, 'landingpage'])->name('landingpage.index');

   Route::get('/property/{id}', [MainController::class, 'show'])->name('property.details');

   // **Change this line: from GET to POST to support form submission**
   Route::post('/property/inquiry', [MainController::class, 'inquiry'])->name('property.inquiry');


   // backend Routes
   Route::get('/property-form', [PropertiesController::class, 'show'])->name('properties.form');
   Route::post('/property-store', [PropertiesController::class, 'store'])->name('properties.store');
   Route::get('/property-table', [PropertiesController::class, 'table'])->name('properties.table');
   Route::get('/property-delete/{id}', [PropertiesController::class, 'delete'])->name('properties.delete');
   Route::get('/property-edit/{id}', [PropertiesController::class, 'edit'])->name('properties.edit');
   Route::put('/property-update/{id}', [PropertiesController::class, 'update'])->name('properties.update');


   Route::get('/detail/form', [DetailController::class, 'show']);
   Route::post('/detail/store', [DetailController::class, 'store'])->name('detail.store');
   Route::get('/detail/table', [DetailController::class, 'table'])->name('detail.table');
   Route::get('/detail/delete/{id}', [DetailController::class, 'delete'])->name('detail.delete');
   Route::get('/detail/edit/{id}', [DetailController::class, 'edit'])->name('detail.edit');
   Route::put('/detail/update/{id}', [DetailController::class, 'update'])->name('detail.update');
});

//  admin dashboard
Route::middleware(['admin'])->group(function () {
   Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.index');
   Route::post('/admin/logout', [AdminLoginController::class, 'adminlogout'])->name('admin.dashboard.logout');
});
