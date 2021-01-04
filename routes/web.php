<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;

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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/tasks', function () {
    return view('tasks');
})->name('tasks');


Route::group(['middleware' => ['auth:sanctum', 'verified'], 'prefix' => 'notes'], function () {
    Route::get('/', [NotesController::class, 'index'])->name('notes');
    Route::get('/create', [NotesController::class, 'create'])->name('notes.create');
    Route::post('/store', [NotesController::class, 'store'])->name('notes.store');
    Route::get('/show/{id}', [NotesController::class, 'show'])->name('notes.show');
    Route::get('/edit/{id}', [NotesController::class, 'edit'])->name('notes.edit');
    Route::patch('/update/{id}', [NotesController::class, 'update'])->name('notes.update');
    Route::get('/delete/{id}', [NotesController::class, 'destroy'])->name('notes.delete');
});

Route::middleware(['auth:sanctum', 'verified'])->post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');