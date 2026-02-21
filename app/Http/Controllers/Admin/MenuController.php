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
    public function index()
    {
        $menus = Menu::with('category')->latest()->paginate(12);;

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
            'menu_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', //max upload 2MB
            'is_available' => 'nullable|boolean',

        ]);

        if ($request->hasFile('menu_image')) {
            $validated['menu_image'] = $request->file('menu_image')->store('menus', 'public');
        }

        $validated['slug'] = Str::slug($request->name);
        $validated['is_available'] = $request->has('is_available');

        Menu::create($validated);

        return redirect()->route('admin.menus.index')->with('success', 'New menu successfully added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
            'menu_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', //max upload 2MB
            'is_available' => 'nullable|boolean',

        ]);

        if ($request->hasFile('menu_image')) {
            if ($menu->menu_image) {
                Storage::disk('public')->delete($menu->menu_image);
            }
            $validated['menu_image'] = $request->file('menu_image')->store('menus', 'public');
        }
        $validated['slug'] = Str::slug($request->name);

        $menu->update($validated);

        return redirect()->route('admin.menus.index')->with('success', 'Menu successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', value: 'Menu is deleted!');
    }
}
