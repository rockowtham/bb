<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
       /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $menu = Menu::where('parent_id', null)->with('children')->get()->toArray();

        return view('web.home', compact('menu')); // Assuming you have a welcome.blade.php view
    }
}
