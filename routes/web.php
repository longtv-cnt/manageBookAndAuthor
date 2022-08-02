<?php

use App\Http\Controllers\modal\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\modal\FileController;
use App\Http\Controllers\modal\BookController;
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

Route::get('/',[AuthorController::class,'index'])->name('authorList');
Route::get('add_author/',[AuthorController::class,'add_view'])->name('addAuthor');
Route::post('post_add_author/',[AuthorController::class,'post_add_author'])->name('post_add_author');
Route::get('upload_file/',[FileController::class,'upload_file'])->name('upload_file');
Route::post('post_upload_file/',[FileController::class,'post_upload_file'])->name('post_upload_file');
Route::get('/book/index',[BookController::class,'index'])->name('bookList');
Route::get('add_book/',[BookController::class,'add_view_book'])->name('addBook');
Route::post('post_add_book/',[BookController::class,'post_add_book'])->name('post_add_book');
// Route::group(['prefix' => 'book'], function () {

//     Route::get('/', [
//         'uses' => 'modal\BookController@index',

//     ]);

// });
Route::get('delete_author/{nickname}',[AuthorController::class,'delete'])->name('delete');
Route::get('delete_book/{id}',[BookController::class,'delete'])->name('delete_book');
Route::get('edit_author/{nickname}',[AuthorController::class,'edit_author'])->name('edit_author');
Route::post('post_edit_author/{nickname}',[AuthorController::class,'post_edit_author'])->name('post_edit_author');
Route::get('edit_book/{id}',[BookController::class,'edit'])->name('edit_book');
Route::post('post_edit_book/{id}',[BookController::class,'post_edit_book'])->name('post_edit_book');
