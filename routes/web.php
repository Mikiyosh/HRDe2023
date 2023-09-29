<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ActionController;

// ルート定義を整理
// ルート定義を整理

Route::middleware('auth')->group(function () {

    Route::get('/action/mypage', [ActionController::class, 'mydata'])->name('action.mypage');

    Route::get('/action/timeline', [ActionController::class, 'timeline'])->name('action.timeline');
    Route::get('/action/show', [ActionController::class, 'show'])->name('action.show');


    Route::get('/action/create', [ActionController::class, 'create'])->name('action.create');
   
    Route::post('action/{action}/favorites', [FavoriteController::class, 'store'])->name('favorites');
    Route::post('action/{action}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');

    Route::resource('action', ActionController::class)->except(['create', 'show']);  // createとshowを除外

  
});


Route::middleware('auth')->group(function () {
    
    Route::get('/goal/mypage', [GoalController::class, 'mydata'])->name('goal.mypage');
    Route::get('/goal/search/input', [SearchController::class, 'create'])->name('search.input');
    Route::get('/goal/search/result', [SearchController::class, 'index'])->name('search.result');
    Route::get('/goal/timeline', [GoalController::class, 'timeline'])->name('goal.timeline');
    Route::get('/goal/show', [GoalController::class, 'show'])->name('goal.show');


    Route::get('/goal/create', [GoalController::class, 'create'])->name('goal.create');
    Route::get('user/{user}', [FollowController::class, 'show'])->name('follow.show');
    Route::post('user/{user}/follow', [FollowController::class, 'store'])->name('follow');
    Route::post('user/{user}/unfollow', [FollowController::class, 'destroy'])->name('unfollow');
    Route::post('goal/{goal}/favorites', [FavoriteController::class, 'store'])->name('favorites');
    Route::post('goal/{goal}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');

    Route::resource('goal', GoalController::class)->except(['create', 'show']);  // createとshowを除外

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
