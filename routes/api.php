<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('posts', PostController::class);



// Liste des routes CRUD
Route::get('/posts', [PostController::class, 'index']);       // Afficher tous les posts
Route::post('/posts', [PostController::class, 'store']);      // Créer un post
Route::get('/posts/{id}', [PostController::class, 'show']);   // Afficher un post
Route::put('/posts/{id}', [PostController::class, 'update']); // Modifier un post
Route::delete('/posts/{id}', [PostController::class, 'destroy']); // Supprimer un post
