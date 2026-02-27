<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CompanyProfile;
use App\Models\Menu;
use App\Models\Message;
use App\Models\News;
use App\Models\Outlet;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $company = CompanyProfile::first();
        $latestNews = News::latest()->take(3)->get();
        $featuredMenus = Menu::where('is_available', 1)->latest()->take(4)->get();
        $randomMenuImage = Menu::where('is_available', 1)->inRandomOrder()->first();

        return view('frontend.index', compact('company', 'latestNews', 'featuredMenus', 'randomMenuImage'));
    }

    public function menu()
    {
        $categories = Category::with(['menus' => function ($query) {
            $query->where('is_available', 1);
        }])->get();

        return view('frontend.menu', compact('categories'));
    }

    public function about()
    {
        $company = CompanyProfile::first();
        return view('frontend.about', compact('company'));
    }

    public function outlets()
    {
        $outlets = Outlet::all();
        return view('frontend.outlets', compact('outlets'));
    }

    public function news()
    {
        $featuredNews = News::latest()->first();
        $newsList = News::when($featuredNews, function ($query) use ($featuredNews) {
            return $query->where('id', '!=', $featuredNews->id);
        })->latest()->paginate(6);

        return view('frontend.news', compact('featuredNews', 'newsList'));
    }

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        $latestNews = News::where('id', '!=', $news->id)->latest()->take(3)->get();
        return view('frontend.news-detail', compact('news', 'latestNews'));
    }

    public function contact()
    {
        $company = CompanyProfile::first();
        return view('frontend.contact', compact('company'));
    }

    public function message(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}
