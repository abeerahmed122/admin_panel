<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

 Route::get('/Dashboard', [BookController::class,'index']);
 Route::get('/AllBooks', [BookController::class,'showbooks']);
 Route::get('/AllUsers', [BookController::class,'showusers']);
 Route::get('/BBooks', [BookController::class,'showbbooks']);
 Route::post('/AllBooks', [BookController::class,'storebook']);
 Route::post('/AllUsers', [BookController::class,'storeuser']);
 Route::get('/EditBook/{id}', [BookController::class,'editbook']);
 Route::get('/EditUser/{id}', [BookController::class,'edituser']);
 Route::get('/EditBBook/{id}', [BookController::class,'editbbook']);
 Route::put('/AllBooks/{id}', [BookController::class,'updatebook']);
 Route::put('/AllUsers/{id}', [BookController::class,'updateuser']);
 Route::put('/BBooks/{id}', [BookController::class,'updatebbook']);
 Route::get('/ViewBook/{id}', [BookController::class,'viewbook']);
 Route::get('/ViewUser/{id}', [BookController::class,'viewuser']);
 Route::get('/ViewBBook/{id}', [BookController::class,'viewbbook']);
 Route::delete('/DeleteBook/{id}', [BookController::class,'destroybook']);
 Route::delete('/DeleteUser/{id}', [BookController::class,'destroyuser']);
 Route::delete('/DeleteBBook/{id}', [BookController::class,'destroybbook']);
 Route::get('/AddBook', [BookController::class,'addbook']);
 Route::get('/AddUser', [BookController::class,'adduser']);

 Route::post('/search', [BookController::class,'search'])->name('search');
