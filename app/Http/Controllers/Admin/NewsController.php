<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = News::query();

        if ($request->filled('search')) {
            $query->where('title', 'like', "%{$request->search}%");
        }

        switch ($request->sort) {
            case 'terlama':
                $query->oldest();
                break;
            case 'judul_asc':
                $query->orderBy('title', 'asc');
                break;
            case 'judul_desc':
                $query->orderBy('title', 'desc');
                break;
            default:
                $query->latest();
                break;
        }

        $news = $query->paginate(10)->withQueryString();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('news', 'public');
        }
        $validated['slug'] = Str::slug($request->title);
        $validated['user_id'] = Auth::id();

        News::create($validated);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
                Storage::disk('public')->delete($news->thumbnail);
            }
            $validated['thumbnail'] = $request->file('thumbnail')->store('news', 'public');
        }
        $validated['slug'] = Str::slug($request->title);

        $news->update($validated);
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui!');
    }

    public function destroy(News $news)
    {
        if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
            Storage::disk('public')->delete($news->thumbnail);
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita berhasil dihapus!');
    }
}
