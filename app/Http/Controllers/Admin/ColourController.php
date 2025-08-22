<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Colour;
use Illuminate\Http\Request;

class ColourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colours = Colour::all();
        return view('admin.colours.index', compact('colours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.colours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Colour::create([
            'name' => $request->name,
        ]);
        return redirect()->route('colours.index')->with('success', 'Colour created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Colour $colour)
    {
        return view('admin.colours.show', compact('colour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Colour $colour)
    {
        return view('admin.colours.edit', compact('colour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Colour $colour)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $colour->update([
            'name' => $request->name,
        ]);
        return redirect()->route('colours.index')->with('success', 'Colour updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Colour $colour)
    {
        $colour->delete();
        return redirect()->route('colours.index')->with('success', 'Colour deleted successfully.');
    }
}
