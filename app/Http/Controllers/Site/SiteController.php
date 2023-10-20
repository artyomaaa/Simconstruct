<?php

namespace App\Http\Controllers\Site;

use App\Offer;
use App\Project;
use App\ProjectImage;
use App\Slider;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $url = URL::current();
        $sliders = Slider::orderby('sort_id', 'ASC')->get();
        $projects = Project::all();
        $offers = Offer::query()->orderBy('id', 'ASC')->take('3')->get();

        return view('home.home', compact('sliders', 'projects', 'offers', 'url'));
    }

    public function about()
    {
        return view('home.about');
    }

    public function services()
    {
        $project_image = ProjectImage::orderBy('id', 'ASC')->take(9)->get();

        return view('home.service', compact('project_image'));
    }

    public function Contact_us()
    {
        return view('home.contact');
    }

    public function abort()
    {
        return view('home.abort404');
    }
}

