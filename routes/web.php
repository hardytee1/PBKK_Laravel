<?php

use Illuminate\Support\Facades\Route;
use App\Models\Picture;
use App\Http\Controllers\PictureController;


Route::get('/', function () {
    return view('home', ['title' => 'HOME']);
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Hardy Tee',
        'title' => 'About'
    ]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 
        'pictures' => Picture::all()]
    );
})->name('blog'); // Add the name here
// Route for displaying the form to create a new post
Route::get('/blog/create', [PictureController::class, 'create'])->name('picture.create');
Route::post('/blog', [PictureController::class, 'store'])->name('picture.store');

Route::get('/blog/edit/{picture}', [PictureController::class, 'edit'])->name('picture.edit');
Route::patch('/blog/{picture}', [PictureController::class, 'update'])->name('picture.update');

Route::delete('/blog/{picture}', [PictureController::class, 'destroy'])->name('picture.destroy');

Route::get('contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('profile', function () {
    return view('profile', ['title' => 'Profile',
        'name' => 'Hardy Tee'
    ]);
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('setting', function () {
    return view('settings', ['title' => 'Settings']);
});
