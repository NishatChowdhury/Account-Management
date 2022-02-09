<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::paginate(10);
        return view('dashboard.employee.gender.index', compact('genders'));
    }

    public function create()
    {
        return view('dashboard.employee.gender.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string','unique:genders', 'max:255'],
            
            'is_active' => ['required', 'boolean'],
        ]);

        Gender::create($validated);

        return redirect()->route('gender.index')->with('success', 'Gender Created Successfully.');
    }

    public function edit(Gender $gender)
    {
        return view('dashboard.employee.gender.edit', compact('gender'));
    }

    public function update(Request $request, Gender $gender)
    {
        $validated = $request->validate([
            'name' => ['required', 'string','unique:genders', 'max:255'],
            'is_active' => ['required', 'boolean'],
        ]);

        $gender->update($validated);

        return redirect()->route('gender.index')->with('success', 'Gender updated successfully.');
    }

    public function destroy(Gender $gender)
    {
        $gender->delete();
        return back()->with('success', 'Gender deleted successfully.');
    }

}
