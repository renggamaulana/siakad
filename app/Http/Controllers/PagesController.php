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
        return view('pages.auth.login', [
            'title' => 'Login',
        ]);
    }
    public function register()
    {
        return view('pages.auth.register', [
            'title' => 'Register'
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
