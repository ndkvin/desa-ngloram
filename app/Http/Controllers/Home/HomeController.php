<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home',[
            'pengumuman' => Post::where('category', 'pengumuman')->latest()->limit(3)->get(),
            'berita' => Post::where('category', 'berita')->latest()->limit(3)->get(),
            'agenda' => Post::where('category', 'agenda')->latest()->limit(3)->get(),
        ]);
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

    public function struktur()
    {
        return view('pages.struktur');
    }

    public function demografi()
    {
        return view('pages.demografi');
    }

    public function visimisi() {
        return view('pages.visimisi');
    }

    public function geografis()
    {
        return view('pages.geografis');
    }

    public function beritaShow($slug)
    {
        return view('pages.berita-detail', [
            'berita' => Post::where([['slug', $slug], ['category', 'berita']])->firstOrFail(),
            'latest'=> Post::where('category', 'berita')->latest()->limit(3)->get(),
        ]);
    }

    public function pengumumanShow($slug)
    {
        return view('pages.pengumuman-detail', [
            'pengumuman' => Post::where([['slug', $slug], ['category', 'pengumuman']])->firstOrFail(),
            'latest'=> Post::where('category', 'berita')->latest()->limit(3)->get(),
        ]);
    }

    public function agendaShow($slug)
    {
        return view('pages.agenda-detail', [
            'agenda' => Post::where([['slug', $slug], ['category', 'agenda']])->firstOrFail(),
            'latest'=> Post::where('category', 'berita')->latest()->limit(3)->get(),
        ]);
    }
}
