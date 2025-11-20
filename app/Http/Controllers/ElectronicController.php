<?php

namespace App\Http\Controllers;

use App\Models\Electronic;
use Illuminate\Http\Request;

class ElectronicController extends Controller
{
    public function index()
    {
        $electronics = Electronic::all();
        return view('electronics.index', compact('electronics'));
    }

    public function create()
    {
        return view('electronics.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Electronic::create($validated);

        return redirect()
            ->route('electronics.index')
            ->with('success', 'Electronic item created successfully.');
    }

    public function fullView()
    {
        $electronics = Electronic::all();
        return view('electronics.fullview', compact('electronics'));
    }

    public function show(Electronic $electronic)
    {
        return view('electronics.show', compact('electronic'));
    }

    public function edit(Electronic $electronic)
    {
        return view('electronics.edit', compact('electronic'));
    }

    public function update(Request $request, Electronic $electronic)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $electronic->update($validated);

        return redirect()
            ->route('electronics.index')
            ->with('success', 'Electronic item updated successfully.');
    }

    public function destroy(Electronic $electronic)
    {
        $electronic->delete();

        return redirect()
            ->route('electronics.index')
            ->with('success', 'Electronic item deleted successfully.');
    }
}
