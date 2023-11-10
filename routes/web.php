<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/note',[NoteController::class,'index'])->name('note.index');
Route::get('/create',[NoteController::class,'create'])->name('note.create');

Route::post('/note/save',[NoteController::class,'save'])->name('note.save');
Route::get('/note/edit/{note}',[NoteController::class,'edit'])->name('note.edit');
Route::put('/note/update/{note}',[NoteController::class,'update'])->name('note.update');
Route::get('/note/show/{note}',[NoteController::class,'show'])->name('note.show');
Route::delete('/note/destroy/{note}',[NoteController::class, 'delete'])->name('note.delete');






// Parametros con controladores
// Route::get('/',[UserController::class,'index'])->name('user.index');
// Route::get('/create',[UserController::class,'create'])->name('user.create');

// Parametros con valores dinamicos
// Route::get("/note/{id}/{title?}",[NoteController::class, 'index'])->name('note.index');
// Route::get("/note/hello" , [NoteController::class, 'example'])->name('note.hello');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
