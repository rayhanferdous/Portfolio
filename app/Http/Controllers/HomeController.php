<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Category;
use App\Models\FAQ;
use App\Models\HeroSection;
use App\Models\News;
use App\Models\Portfolio;
use App\Models\Qualification;
use App\Models\Review;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::select(
            'id',
            'name',
            'email',
            'phone',
            'address',
            'job',
            'degree',
            'profile_pic',
            'birth_day',
            'experience'
        )->where('id', 1)->first();



        $skills = Skill::orderBy('id', 'desc')->take(6)->get();

        $services = Service::take(6)->get();

        $categories = Category::all();
        $reviewers = Review::orderBy('id', 'desc')->take(5)->get();

        $portfolios = Portfolio::with('category')->orderBy('id', 'desc')->inRandomOrder()->get();

        $heroSection = HeroSection::first();
        $experiences = Qualification::where('type', ['Work'])->orderBy('id', 'desc')->get();
        $educations = Qualification::where('type', ['Education'])->orderBy('id', 'desc')->get();
        $publications = Qualification::where('type', ['Publication'])->orderBy('id', 'desc')->get();
        $setting = Setting::first();
        $news = News::orderBy('id', 'desc')->inRandomOrder()->get();
        $faq = FAQ::all();
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        $awards = Award::orderBy('id', 'desc')->get();

        return view('home', compact(
            'user',
            'skills',
            'services',
            'categories',
            'portfolios',
            'reviewers',
            'heroSection',
            'experiences',
            'educations',
            'setting',
            'news',
            'faq',
            'testimonials',
            'publications',
            'awards'
        ));
    }
}