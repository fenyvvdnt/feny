<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|in:Gold,Silver,Platinum',
            'testimonial' => 'required|string|max:1000',
            'is_active' => 'required|in:0,1',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'level' => $request->level,
            'testimonial' => $request->testimonial,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|in:Gold,Silver,Platinum',
            'testimonial' => 'required|string|max:1000',
            'is_active' => 'required|in:0,1',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'name' => $request->name,
            'level' => $request->level,
            'testimonial' => $request->testimonial,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil dihapus.');
    }
}
