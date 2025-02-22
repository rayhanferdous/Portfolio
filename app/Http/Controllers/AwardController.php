<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::all();
        return view('admin.awards.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'type' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:10240',
            'link' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            $awardImage = $request->file('image')->store('public/awards');
            $validated['image'] = str_replace('public/', 'storage/', $awardImage);
        }

        Award::create($validated);

        return redirect()->route('admin.awards.index')->with('success', 'Award created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Award $awards): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award $award)
    {
        return view('admin.awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award $award): RedirectResponse
    {
        $validated = $request->validate([
            'type' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:10240',
            'link' => 'nullable'
        ]);

        if ($request->hasFile('image')) {
            if ($award && $award->image) {
                Storage::delete(str_replace('storage/', 'public/', $award->image));
            }
            $awardImage = $request->file('image')->store('public/awards');
            $validated['image'] = str_replace('public/', 'storage/', $awardImage);
        }


        $award->update($validated);

        return redirect()->route('admin.awards.index')->with('success', 'Award updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award $award): RedirectResponse
    {
        if ($award && $award->image) {
            Storage::delete(str_replace('storage/', 'public/', $award->image));
        }
        $award->delete();

        return redirect()->route('admin.awards.index')->with('success', 'Award deleted successfully');
    }
}
