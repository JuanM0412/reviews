<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Reviews';
        $viewData['subtitle'] = 'List of reviews';
        $viewData['reviews'] = Review::all();

        return view('review.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $review = Review::findOrFail($id);
        $viewData['title'] = 'Review - '.$review['id'];
        $viewData['subtitle'] = $review['name'].' - Review information';
        $viewData['review'] = $review;

        return view('review.show')->with('viewData', $viewData);
    }
}