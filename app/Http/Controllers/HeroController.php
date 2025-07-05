<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    Public function index()
    {
        $heroes = Hero::all();
        return view('admin.hero.index', compact('heroes'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'status_publish' => 'required|in:0,1',
        ]);

        $imagePath = $request->file('image')->store('heroes', 'public');

        Hero::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'status_publish' => $request->status_publish,
        ]);

        return redirect()->route('hero.index')->with('success', 'Hero section berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status_publish' => 'required|in:0,1',
        ]);

        $data = $request->only(['title', 'description', 'status_publish']);

        if ($request->hasFile('image')) {
            if ($hero->image) {
                Storage::disk('public')->delete($hero->image);
            }
            $data['image'] = $request->file('image')->store('heroes', 'public');
        }

        $hero->update($data);

        return redirect()->route('hero.index')->with('success', 'Hero section berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        if ($hero->image) {
            Storage::disk('public')->delete($hero->image);
        }
        $hero->delete();

        return redirect()->route('hero.index')->with('success', 'Hero section berhasil dihapus.');
    }
}
