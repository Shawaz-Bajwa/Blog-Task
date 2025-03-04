<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();
        $articles = Article::latest()->limit(3)->get();

        return view('landing', compact('posts', 'articles'));
    }
    public function Dashboard()
    {
        $posts = Post::where('user_id', Auth::user()->id)->latest()->get();
        $articles = Article::where('user_id', Auth::user()->id)->latest()->get();

        return view('dashboard', compact('posts', 'articles'));
    }
}
