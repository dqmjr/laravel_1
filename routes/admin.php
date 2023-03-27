<?php

use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware('admin', 'active')->group(function () {
    Route::redirect('/', '/admin/posts')->name('admin');
    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}/update', [PostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}/delete', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::resource('/posts/{post}/comments', CommentController::class)->only([
            'index', 'show', 'edit'
        ]);
});
