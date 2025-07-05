<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }
    
    public function create()
    {
        return view('admin.contact.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'status_publish' => 'required|in:0,1',
        ]);
    
        Contact::create($request->all());
    
        return redirect()->route('contact.index')->with('success', 'Kontak berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'status_publish' => 'required|in:0,1',
        ]);
    
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
    
        return redirect()->route('contact.index')->with('success', 'Kontak berhasil diupdate.');
    }
    
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
    
        return redirect()->route('contact.index')->with('success', 'Kontak berhasil dihapus.');
    }
    
}