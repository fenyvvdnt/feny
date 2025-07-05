<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::where('is_active', true)->get();
        return view('front-end.testimonial', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front-end.testimonial-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|in:Gold,Silver,Platinum',
            'testimonial' => 'required|string|max:1000'
        ]);

        Testimonial::create([
            'name' => $request->name,
            'level' => $request->level,
            'testimonial' => $request->testimonial,
            'is_active' => true
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('front-end.testimonial-show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('front-end.testimonial-edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'level' => 'required|in:Gold,Silver,Platinum',
            'testimonial' => 'required|string|max:1000'
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update([
            'name' => $request->name,
            'level' => $request->level,
            'testimonial' => $request->testimonial
        ]);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->update(['is_active' => false]);

        return redirect()->route('testimonial.index')->with('success', 'Testimonial berhasil dihapus!');
    }
}
