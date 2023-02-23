<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => json_encode(Post::where('status', 'publish')
                ->with('categories:name,slug,status', 'tags:name,slug,status')
                ->orderBy('id', 'desc')
                ->paginate(10))
        ]);
    }
}
