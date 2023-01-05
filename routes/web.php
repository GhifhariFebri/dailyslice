<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CategoriesImageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderDataController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/category_item', function () {
    return view('category_form');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/category', [CategoriesController::class, 'index']);

Route::get('/', [CategoriesController::class, 'home']);

Route::get('/category/{categories}', [CategoriesController::class, 'detail']);

Route::get('/nimda', function () {
    return view('admin');
});

Route::get('/question', [FaqController::class, 'index']);
Route::resource('feedbacks', FeedbackController::class);
Route::resource('order_data', OrderDataController::class);
Route::resource('category', CategoriesController::class);
Route::resource('faq', FaqController::class);
Route::resource('testimony', TestimonyController::class);

Route::get('/admin', [CategoriesController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/feedbackadmin', [FeedbackController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/userdataadmin', [OrderDataController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/faqadmin', [FaqController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/testimonyadmin', [TestimonyController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');});
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
