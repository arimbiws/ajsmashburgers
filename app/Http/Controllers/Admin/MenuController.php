<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Menu::with('category');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhereHas('category', function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
        }

        switch ($request->sort) {
            case 'terlama':
                $query->oldest();
                break;
            case 'nama_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'nama_desc':
                $query->orderBy('name', 'desc');
                break;
            case 'harga_tertinggi':
                $query->orderBy('price', 'desc');
                break;
            case 'harga_terendah':
                $query->orderBy('price', 'asc');
                break;
            default:
                $query->latest();
                break;
        }

        $menus = $query->paginate(12)->withQueryString();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.menus.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'menu_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'is_available' => 'nullable|boolean',

        ]);

        if ($request->hasFile('menu_image')) {
            $validated['menu_image'] = $request->file('menu_image')->store('menus', 'public');
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_available'] = $request->has('is_available') ? 1 : 0;

        Menu::create($validated);

        return redirect()->route('admin.menus.index')->with('success', 'New menu successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menus.edit', compact('menu', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'menu_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
            'is_available' => 'nullable|boolean',
        ]);

        if ($request->hasFile('menu_image')) {
            if ($menu->menu_image && Storage::disk('public')->exists($menu->menu_image)) {
                Storage::disk('public')->delete($menu->menu_image);
            }
            $validated['menu_image'] = $request->file('menu_image')->store('menus', 'public');
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_available'] = $request->has('is_available') ? 1 : 0;

        $menu->update($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Menu successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        if ($menu->menu_image && Storage::disk('public')->exists($menu->menu_image)) {
            Storage::disk('public')->delete($menu->menu_image);
        }

        $menu->delete();

        return redirect()->route('admin.menus.index')->with('success', 'Menu is deleted!');
    }
}
