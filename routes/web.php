<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;


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

Route::get('master', function(){
    return view('master');
});
Route::get('/', [ArticleController::class, 'index'])->name('index');
Route::post('/', [ArticleController::class, 'store'])->name("add-article");
Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/categorie', [CategoryController::class, 'index']);
Route::get('/categorie/{id}', [CategoryController::class, 'show'])->name('show-categorie');


Route::get('/admin', [AdminController::class, 'index'])
    ->name('index-admin')
    ->middleware('check.source');
    
Route::get('/admin/create-category', [CategoryController::class, 'create'])->name('create-category');
Route::post('/admin/create-category', [CategoryController::class, 'store']);

Route::post('/admin/create-article', 
    [AdminController::class, 'store'])
        ->name('add-article');


Route::get('/articles', [TestController::class, 'displayArticle']);


//Prerequis: S'assurer que MySQL est bien demarré


//TODO Effectuer un enregistrement (Article) en base de données - 15 min
//TODO Recupérer la liste des articles créées. - 20 min
//TODO Modifier les fichiers ArticleController et index.blade.php 
//afin qu'il affiche la liste des articles présents dans la BD -- 30 minutes

