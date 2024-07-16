<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function sejarah() {
        return view('pages.sejarah');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function berita()
    {
        return view('pages.berita');
    }

    public function agenda()
    {
        return view('pages.agenda');
    }

    public function pengumuman()
    {
        return view('pages.pengumuman');
    }
}
