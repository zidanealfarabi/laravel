<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home', [
            'judul' => 'Home'
        ]);
    }

    public function blog()
    {
        $berita = DB::table('berita')->get();
        return view('home.blog', [
            'berita' => $berita,
            'judul' => 'Blog'
        ]);
    }

    public function about()
    {
        $profile = DB::table('profile')->get();
        return view('home.about', [
            'judul' => 'About Us',
            'profile' => $profile
        ]);
    }

    public function contact()
    {
        $kontak = DB::table('kontak')->get();
        return view('home.contact', [
            'judul' => 'Contact Us',
            'kontak' => $kontak
        ]);
    }

}
