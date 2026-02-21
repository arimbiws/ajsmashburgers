<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OutletController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/menu', [FrontendController::class, 'menu'])->name('frontend.menu');
Route::get('/outlet', [FrontendController::class, 'outlet'])->name('frontend.outlet');
Route::get('/news', [FrontendController::class, 'news'])->name('frontend.news');
Route::get('/news/{slug}', [FrontendController::class, 'newsDetail'])->name('frontend.news.detail');
Route::get('/contact', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::post('/contact', [FrontendController::class, 'message'])->name('frontend.message');

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); //pake patch or put?? /profile/{id}???
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('menus', MenuController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('news', NewsController::class);
        Route::resource('outlets', OutletController::class);
        Route::resource('company', CompanyProfileController::class);

        // Khusus Company Profile (Cuma bisa Edit, tidak ada Delete/Create baru)
        // Route::get('/company-profile', [CompanyProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/company-profile', [CompanyProfileController::class, 'update'])->name('profile.update');

        Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    });
});

require __DIR__ . '/auth.php';
