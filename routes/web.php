<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Locale;
use App\Http\Middleware\Visitor;
use Illuminate\Support\Facades\Route;

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

Route::middleware(Locale::class)->group(function(){

Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home')->middleware(Visitor::class);
Route::get('/lang/{locale}',[\App\Http\Controllers\HomeController::class,'lang'])->name('lang');
Route::get('/change-lang',function(Request $request){
    $lang = $request->lang;
    return redirect('/lang/'.$lang);
});
Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');


Route::get('/products',[\App\Http\Controllers\ProductController::class,'index'])->name('products');
Route::get('/product/{slug}',[\App\Http\Controllers\ProductController::class,'show'])->name('products.show');
Route::get('/about-us',[\App\Http\Controllers\HomeController::class,'about'])->name('about');
Route::get('/contact-us',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\HomeController::class,'submitContact'])->name('contact.submit');

});