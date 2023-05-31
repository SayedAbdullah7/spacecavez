<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


Route::get('/phpinfo', function () {
    return phpinfo();
});
Route::get('/', function () {
    return view('frontend.index');
})->name('home');
Route::get('/about-us', function () {
    return view('frontend.about_us');
})->name('about_us');
//Route::get('/education', function () {
//    return view('frontend.education');
//})->name('education');
Route::get('/events', function () {
//    return view('frontend.event');
    return view('frontend.event');
})->name('events');
Route::get('/contact-us', function () {
    return view('frontend.contact_us');
})->name('contact_us');

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    $posts = \App\Models\Post::latest()->get();
    return view('dashboard',compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


Route::post('/upload-image', [\App\Http\Controllers\ImageController::class, 'upload'])->name('upload.image');
Route::resource('post', \App\Http\Controllers\PostController::class);
Route::get('/events', [\App\Http\Controllers\PostController::class, 'events'])->name('events');
Route::get('/education', [\App\Http\Controllers\PostController::class, 'educations'])->name('education');
Route::get('/setup', function () {
    Artisan::call('storage:link');
});
Route::post('/send-mail', [\App\Http\Controllers\MaillController::class, 'send'])->name('send.mail');
