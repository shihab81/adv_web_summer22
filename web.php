<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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
Route::get('/home',[PagesController::class,'home'])->name('home');
Route::get('/ourTeams',[PagesController::class,'ourTeams'])->name('ourTeams');
Route::get('/aboutUs',[PagesController::class,'aboutUs'])->name('aboutUs');
Route::get('/contactUs',[PagesController::class,'contactUs'])->name('contactUs');

Route::get('/profile',[PagesController::class,'myprofile'])->name('profile');
Route::get('/contact',[PagesController::class,'contact'])->name('contact');
Route::get('/test',[PagesController::class,'test'])->name('test');

Route::get('/product',[PagesController::class,'product'])->name('product');
