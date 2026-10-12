<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/about', function () {
    $courses = [
        'HTML',
        'CSS',
        'PHP',
        'Laravel'
    ];

    return view('about', compact('courses'));
});

Route::get('/contact', [ProductController::class, 'contact']);

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', compact('nama'));
});