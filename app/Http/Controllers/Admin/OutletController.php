<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OutletController extends Controller
{
    public function index(Request $request)
    {
        $query = Outlet::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('address', 'like', "%{$search}%");
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
            default:
                $query->latest();
                break;
        }

        $outlets = $query->paginate(12)->withQueryString();
        return view('admin.outlets.index', compact('outlets'));
    }

    public function create()
    {
        return view('admin.outlets.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'maps_link' => 'nullable|url',
            'outlet_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('outlet_image')) {
            $validated['outlet_image'] = $request->file('outlet_image')->store('outlets', 'public');
        }

        Outlet::create($validated);
        return redirect()->route('admin.outlets.index')->with('success', 'Outlet berhasil ditambahkan!');
    }

    public function edit(Outlet $outlet)
    {
        return view('admin.outlets.edit', compact('outlet'));
    }

    public function update(Request $request, Outlet $outlet)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'maps_link' => 'nullable|url',
            'outlet_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('outlet_image')) {
            if ($outlet->outlet_image && Storage::disk('public')->exists($outlet->outlet_image)) {
                Storage::disk('public')->delete($outlet->outlet_image);
            }
            $validated['outlet_image'] = $request->file('outlet_image')->store('outlets', 'public');
        }

        $outlet->update($validated);
        return redirect()->route('admin.outlets.index')->with('success', 'Outlet berhasil diperbarui!');
    }

    public function destroy(Outlet $outlet)
    {
        if ($outlet->outlet_image && Storage::disk('public')->exists($outlet->outlet_image)) {
            Storage::disk('public')->delete($outlet->outlet_image);
        }
        $outlet->delete();
        return redirect()->route('admin.outlets.index')->with('success', 'Outlet berhasil dihapus!');
    }
}
