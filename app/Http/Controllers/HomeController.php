<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MasterProduct;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_products = Post::count();
        $total_categories = Category::count();
        $total_master_products = MasterProduct::count();
        return view('dashboard', compact('total_products','total_categories','total_master_products'));
    }
}
