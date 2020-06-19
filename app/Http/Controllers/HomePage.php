<?php

namespace App\Http\Controllers;
use App\Banner;
use App\Cta;
use App\service;
use App\Post;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    // public function index(){
    //     $banners = Banner::all();
    //     $ctas = Cta::all();
    //     return view('welcome', [
    //         'banners'=> $banners,
    //         'ctas'=>$ctas
    //     ]);
    // }

    public function index(){
        $banners = Banner::all();
        $ctas = Cta::all();
        $services = Service::all();

        return view('welcome')->with([
            'banners' => $banners,
            'ctas'=> $ctas,
            'services'=>$services,
        ]);
    }

    public function blog(){
        $posts = Post::all();
        return view('blog')->with([
            'posts'=> $posts,
        ]);
    }
}
