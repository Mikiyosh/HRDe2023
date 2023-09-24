<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoalController;

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FollowController;

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
Route::middleware('auth')->group(function () {
    
  Route::post('user/{user}/follow', [FollowController::class, 'store'])->name('follow');
  Route::post('user/{user}/unfollow', [FollowController::class, 'destroy'])->name('unfollow');

    
  Route::post('goal/{goal}/favorites', [FavoriteController::class, 'store'])->name('favorites');
  Route::post('goal/{goal}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');

  Route::get('/goal/mypage', [GoalController::class, 'mydata'])->name('goal.mypage');    
  Route::resource('goal', GoalController::class);
  
});



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