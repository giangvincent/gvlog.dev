<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\StaticContent;

class HomeController extends Controller
{
    public function index()
    {
        $menuTab = Menu::orderBy('order', 'desc')->get();
        $staticContent = StaticContent::where('status', 'index')->get();
        return view('index', [
            'menuTab' => json_encode($menuTab),
            'staticContent' => json_encode($staticContent)
        ]);
    }
}
