<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('index', [
            'posts' => json_encode(Post::where('status', 'publish')
                ->orderBy('id', 'desc')
                ->paginate(10))
        ]);
    }
}
