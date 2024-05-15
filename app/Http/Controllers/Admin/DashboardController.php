<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::count();
        $product =  Product::count();
        $user = User::where('role', 'admin')->count();

        return view('pages.admin.index', compact(
            'category',
            'product',
            'user'
        ));
    }
}
