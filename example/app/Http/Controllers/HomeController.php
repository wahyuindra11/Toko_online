<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Online Store";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "Toko kami sangat terpercaya dan mahal sekali anda harus punya uang yang sangat banyak untuk membeli produk kami";
        $viewData["author"] = "Developed by: CEO BERKAH JAYA";
        return view('home.about')->with("viewData", $viewData);
    }
}
