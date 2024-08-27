<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "active" => "home",
            "category" => Category::all(),
            "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(6)->withQueryString()
        ]);
    }
}
