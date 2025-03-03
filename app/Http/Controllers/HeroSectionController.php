<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function heroIndex()
    {
        $hero = HeroSection::first();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function heroUpdate(Request $request)
    {

        $validated = $request->validate([
            'hero_small_title' => 'nullable',
            'hero_title' => 'nullable',
            'hero_image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'years_of_experience' => 'nullable|numeric|int',
            'number_of_awards' => 'nullable|numeric|int',
            'number_of_pubs' => 'nullable|numeric|int',
            'number_of_published_news' => 'nullable|numeric|int',
        ]);


        $data = [
            'hero_small_title' => $validated['hero_small_title'],
            'hero_title' => $validated['hero_title'],
            'years_of_experience' => $validated['years_of_experience'],
            'number_of_awards' => $validated['number_of_awards'],
            'number_of_pubs' => $validated['number_of_pubs'],
            'number_of_published_news' => $validated['number_of_published_news'],
        ];

        $heroSection = HeroSection::first();

        if ($request->hasFile('hero_image')) {
            if ($heroSection && $heroSection->hero_image) {
                Storage::delete(str_replace('storage/', 'public/', $heroSection->hero_image));
            }

            $heroImgPath = $request->file('hero_image')->store('public/heros');
            $data['hero_image'] = str_replace('public/', 'storage/', $heroImgPath);
        }


        HeroSection::updateOrCreate(
            ['id' => 1],
            $data
        );

        return redirect()->route('admin.hero.index')->with('message', 'Data Updated');
    }
}
