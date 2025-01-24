<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    // Display a listing of the banners
    public function index()
    {
        $banners = Banner::all();  // Get all banners
        return view('admin.banners.index', compact('banners'));
    }

    // Show the form for creating a new banner
    public function create()
    {
        return view('admin.banners.create');
    }

    // Store a newly created banner in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ]);


        // Store the image and get the path
        // Tangkap file dari request
        $image = $request->file('image');

        // Tentukan path tujuan
        $destinationPath = public_path('images'); // Folder tujuan di 'public/images'

        // Buat nama file unik
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Pindahkan file ke folder tujuan
        $image->move($destinationPath, $imageName);

        // Simpan path file ke dalam variabel atau database jika diperlukan
        $imagePath = 'images/' . $imageName; // Path relatif



        // Create a new banner record
        Banner::create([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'is_active' => $request->has('is_active'), // true if checkbox is checked
        ]);

        return redirect()->route('panel2055.banners.index');
    }

    // Show the specified banner
    public function show($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.show', compact('banner'));
    }

    // Show the form for editing the specified banner
    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    // Update the specified banner in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
        ]);

        $banner = Banner::findOrFail($id);

        // Check if a new image has been uploaded
        $imagePath = $banner->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Tentukan path tujuan
            $destinationPath = public_path('images'); // Folder tujuan di 'public/images'

            // Buat nama file unik
            $imageName = time() . '_' . $image->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $image->move($destinationPath, $imageName);

            // Simpan path file ke dalam variabel atau database jika diperlukan
            $imagePath = 'images/' . $imageName; // Path relatif
        }

        // Update the banner record
        $banner->update([
            'title' => $request->title,
            'image' => $imagePath,
            'description' => $request->description,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('panel2055.banners.index');
    }

    // Remove the specified banner from the database
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('panel2055.banners.index');
    }
}
