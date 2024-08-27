<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         "active" => "home"
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about"
    ]);
});





Route::get('/blogs', [PostController::class, 'index']);
//halaman single post
Route::get('/blogs/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [

        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()

    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/author/checkSlug', [DashboardPostController::class, 'checkSlug']);
//Route::get('/dashboard/checkSlug', [AdminCategoryController::class, 'checkSlug']);


Route::resource('/author', DashboardPostController::class)->middleware('auth');
Route::resource('/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
//Route::resource('/author/categories', AdminCategoryController::class)->middleware('admin');

//Route::get('/posts/create', [DashboardPostController::class, 'create'])->middleware('auth');
//Route::get('/posts', [DashboardPostController::class, 'index'])->middleware('auth');


// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'user')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'blog',
//         'posts' => $author->posts->load('category', 'user')
//     ]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
