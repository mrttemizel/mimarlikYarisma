<?php

namespace App\Http\Controllers\frontend\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aim()
    {
        return view('frontend.page.aim');
    }

    public function projectSite()
    {
        return view('frontend.page.project-site');
    }

    public function schedule()
    {
        return view('frontend.page.schedule');
    }

    public function brief()
    {
        return view('frontend.page.brief');
    }

    public function earthView()
    {
        return view('frontend.page.earth-view');
    }

    public function droneVideos()
    {
        return view('frontend.page.drone-videos');
    }

    public function autocadFiles()
    {
        return view('frontend.page.autocad-files');
    }

    public function qA()
    {
        return view('frontend.page.q&a');
    }

    public function jury()
    {
        return view('frontend.page.jury');
    }

    public function prizes()
    {
        return view('frontend.page.prizes');
    }

    public function register()
    {
        return view('frontend.page.register');
    }

    public function uploadProject()
    {
        return view('frontend.page.upload-project');
    }

    public function contact()
    {
        return view('frontend.page.contact');
    }

}
