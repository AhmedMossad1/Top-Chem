<?php

use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(
        [
                'namespace' => 'App\Http\Controllers\Dashboard',
                'prefix' => 'admin',
                'middleware' => 'admin'
            ], function () {
            Route::get('home',[HomeController::class,'index'])->name('admin.home');
            Route::resource('users','UsersController')->except('show','delete');

        Route::resource('categories', 'CategoriesController')->except(['show']);

            Route::resource('products', 'ProductsController')->except(['show']);
        Route::resource('messages', 'MessagesController')->only(['index' , 'destroy' , 'edit']);
        // Route::post('messages/replay/{id}', 'MessagesController@replay')->name('message.replay');

});
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/', 'App\Http\Controllers\HomeController@welcome')->name('frontend.landing');
Route::get('contact', 'App\Http\Controllers\HomeController@contactUS')->name('front.contact-us');
Route::get('category/{id}', 'App\Http\Controllers\HomeController@category')->name('front.category');
Route::get('about-us', 'App\Http\Controllers\HomeController@aboutUS')->name('front.about-us');
Route::get('product/{id}', 'App\Http\Controllers\HomeController@product')->name('front.product');
Route::get('contact-us', 'App\Http\Controllers\HomeController@messageStore')->name('contact.store');
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
