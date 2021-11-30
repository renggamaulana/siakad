<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'title' => 'Home',
        ]);
    }
    public function login()
    {
        return view('pages.login', [
            'title' => 'Login',
        ]);
    }
    public function students()
    {
        return view('pages.students', [
            'title' => 'Students',
            'students' => Student::all()
        ]);
    }
    public function about()
    {
        return view('pages.about', [
            'title' => 'About',
        ]);
    }
    public function admission()
    {
        return view('pages.admission', [
            'title' => 'Admission',
        ]);
    }
}
