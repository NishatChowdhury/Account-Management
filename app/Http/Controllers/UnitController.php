<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::paginate(10);
        return view('dashboard.unit.index', compact('units'));
    }

    public function create()
    {
        return view('dashboard.unit.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'is_active' => ['required', 'boolean'],
        ]);

        Unit::create($validated);

        return redirect()->route('unit.index')->with('success', 'Unit Created Successfully.');
    }

    public function edit(Unit $unit)
    {
        return view('dashboard.unit.edit', compact('unit'));
    }

    public function update(Request $request, Unit $unit)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            
            'is_active' => ['required', 'boolean'],
        ]);

        $unit->update($validated);

        return redirect()->route('unit.index')->with('success', 'Unit updated successfully.');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return back()->with('success', 'Unit deleted successfully.');
    }

}
