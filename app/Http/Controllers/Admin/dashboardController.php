<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\User;
use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index()
    {

        $user = User::count();
        $sliders = Slider::all();
        $countSlider = Slider::count();
        $category = Category::count();
        $item = Item::count();
        return view('admin.dashboard', compact('sliders', 'countSlider', 'user','category','item'));
   
   
   
    }
}
