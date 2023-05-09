<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ResumeController extends Controller
{
    // page-home
    public function index() {
        return view('home');
    }

    // page-resume
    public function resume() {
        return view('resume');
    }

    // page-projects
    public function projects() {
        return view('projects');
    }

    //page-contact
    public function contact() {
        return view('contact');
    }

    // contactForm
    public function contactForm(Request $request) {
        return view('contact', ['data' => $request]);
    }
}
