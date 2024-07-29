<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function allCourses()
    {
        return view('all_courses');
    }

    public function allEvents()
    {
        return view('all_events');
    }

    public function about()
    {
        return view('about');
    }

    public function loginRegistration()
    {
        return view('login_registration');
    }

    public function test()
    {
        return view('test');
    }

    public function allNews()
    {
        return view('all_news');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
