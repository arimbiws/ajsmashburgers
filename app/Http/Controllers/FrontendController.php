<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\News;
use App\Models\Outlet;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->take(3)->get();
        $featuredMenus = Menu::where('is_available', 1)->take(4)->get();

        return view('frontend.index', compact('latestNews', 'featuredMenus'));
    }

    public function menu()
    {
        $categories = Category::with(['menu' => function ($query) {
            $query->where('is_available', 1);
        }])->get();

        return view('frontend.menu', compact('categories'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function outlets()
    {
        $outlets = Outlet::all();
        return view('frontend.outlets', compact('outlets'));
    }

    public function news()
    {
        return view('frontend.news');
    }

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail(); // Error 404 jika tidak ketemu
        return view('frontend.news-detail', compact('news'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
