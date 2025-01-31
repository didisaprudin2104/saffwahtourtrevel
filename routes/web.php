<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\HubungiKamiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\BannerController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hubungikami', [HubungiKamiController::class, 'index'])->name('hubungikami');
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami');
route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
route::get('/layanan/umroh', [LayananController::class, 'umroh'])->name('layanan.umroh');
route::get('/layanan/haji', [LayananController::class, 'haji'])->name('layanan.haji');
route::get('/layanan/detail', [LayananController::class, 'detail'])->name('layanan.detail');
Route::prefix('panel2025')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('panel2055')->name('panel2055.')->middleware(['auth'])->group(function() {
    Route::resource('banners', BannerController::class);
    Route::get('banners/create', [BannerController::class, 'create'])->name('banners.create');
    Route::post('banners', [BannerController::class, 'store'])->name('banners.store');
    Route::get('banners/edit/{id}', [BannerController::class, 'edit'])->name('banners.edit');
    Route::delete('banners/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');
});



require __DIR__.'/auth.php';
