<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faq = FAQ::all();
        return view('admin.faq.index', compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        FAQ::create($validated);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $fAQ): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FAQ $faq)
    {
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $faq): RedirectResponse
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        $faq->update($validated);


        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $faq): RedirectResponse
    {
        $faq->delete();

        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully');
    }
}
