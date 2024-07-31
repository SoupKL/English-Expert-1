<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main() {
        return view('main');
    }

    public function allCourses() {
        return view('all_courses');
    }

    public function allEvents() {
        return view('all_events');
    }

    public function about() {
        return view('about');
    }

    public function loginRegistration() {
        return view('login_registration');
    }

    public function test() {
        return view('test');
    }

    public function allNews() {
        return view('all_news');
    }

    public function contacts() {
        return view('contacts');
    }

    public function courseA1() {
        return view('courses.course_A1');
    }

    public function courseA2() {
        return view('courses.course_A2');
    }

    public function courseB1() {
        return view('courses.course_B1');
    }

    public function courseB2() {
        return view('courses.course_B2');
    }

    public function courseC1() {
        return view('courses.course_C1');
    }

    public function courseC2() {
        return view('courses.course_C2');
    }

    public function work() {
        return view('courses.work');
    }

    public function purpose() {
        return view('courses.purpose');
    }

    public function new1() {
        return view('new1');
    }

    public function new2() {
        return view('new2');
    }

    public function new3() {
        return view('new3');
    }

    public function new4() {
        return view('new4');
    }

    public function new5() {
        return view('new5');
    }

    public function new6() {
        return view('new6');
    }
}
