<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Home Page - Online Store';

        return view('home.index')->with('viewData', $viewData);
    }
}
