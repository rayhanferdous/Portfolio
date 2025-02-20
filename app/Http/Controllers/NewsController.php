<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // validate the form
        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'published_at' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png',
            'published_link' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $heroImgPath = $request->file('thumbnail')->store('public/news');
            $validated['thumbnail'] = str_replace('public/', 'storage/', $heroImgPath);
        }

        News::create($validated);

        return redirect()->route('admin.news.index')->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'published_at' => 'required',
            'thumbnail' => 'required|mimes:jpg,jpeg,png',
            'published_link' => 'required',
        ]);

        $news = News::find($id);

        if ($request->hasFile('thumbnail')) {
            if ($news && $news->thumbnail) {
                Storage::delete(str_replace('storage/', 'public/', $news->thumbnail));
            }

            $heroImgPath = $request->file('thumbnail')->store('public/news');
            $validated['thumbnail'] = str_replace('public/', 'storage/', $heroImgPath);
        }

        $news->update($validated);

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $news = News::find($id);
        if ($news && $news->thumbnail) {
            Storage::delete(str_replace('storage/', 'public/', $news->thumbnail));
        }

        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'News deleted successfully');
    }
}
