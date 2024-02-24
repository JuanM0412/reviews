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
        $viewData['title'] = 'Review';
        $viewData['subtitle'] = 'Review '.$review['id'];
        $viewData['review'] = $review;

        return view('review.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create review';

        return view('review.create')->with('viewData', $viewData);
    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'description' => 'required',
            'rating' => ['required', 'gt:0', 'lt:6'],
        ]);

        $review = Review::create($request->only(['description', 'rating']));

        $request->session()->flash('message', 'Review with ID '.$review->id.' has been succesfully created.');

        return redirect()->route('review.index');
    }

    public function delete($id): \Illuminate\Http\RedirectResponse
    {
        $post = Review::find($id);
        $post->delete();

        session()->flash('message', 'Review with ID '.$id.' has been succesfully removed.');

        return redirect()->route('review.index');
    }
}
