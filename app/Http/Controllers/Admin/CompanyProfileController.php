<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('admin.company.edit', 1);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $profile = CompanyProfile::firstOrCreate(
            ['id' => 1],
            [
                'about_us' => 'Deskripsi default AJ Smash Burger...',
                'vision' => 'Visi default...',
                'mission' => 'Misi default...',
                'address_main' => 'Alamat default...',
                'phone_main' => '628...',
                'email_main' => 'admin@example.com',
                'link_instagram' => '#',
                'link_maps_main' => '#',
                'logo' => null,
            ]
        );

        return view('admin.company', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = CompanyProfile::findOrFail($id);

        $validated = $request->validate([
            'about_us' => 'required|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'address_main' => 'required|string',
            'phone_main' => 'required|string',
            'email_main' => 'required|email',
            'link_instagram' => 'nullable|string',
            'link_maps_main' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            if ($profile->logo && Storage::disk('public')->exists($profile->logo)) {
                Storage::disk('public')->delete($profile->logo);
            }
            $path = $request->file('logo')->store('company', 'public');
            $validated['logo'] = $path;
        }

        $profile->update($validated);

        return redirect()->back()->with('success', 'Profile company successfully updated!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
