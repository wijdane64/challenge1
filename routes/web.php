<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return 'Bonjour Laravel';
});
Route::get('/accueil', function () {
    return view('accueil');
});
Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/accueil', function () {
    return view('accueil');
})->name('home');
Route::get('/bonjour/{nom?}', function ($nom = 'abdelmalek') {
    return "Bonjour, $nom !";
});
Route::get('/salutation/{prenom}', [TestController::class, 'greet']);
Route::get('/salutation/{prenom}', [TestController::class, 'greet'])->name('salutation');
use App\Http\Controllers\TestController;
Route::get('/profile/{id}/{age}', [TestController::class, 'profile']);

Route::get('/article/{id}', [TestController::class, 'showArticle']);
Route::get('/profile/{id}/{age}', [TestController::class, 'profile'])
    ->where(['id' => '[0-9]+', 'age' => '[0-9]+']);
    Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
    Route::get('/register',[registerController::class,'showform']);
    Route::post('/register/submit',[registerController::class,'handleForm'])->name('register.submit');  

