@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["review"]["description"] }}
                </h5>
                <p class="card-text">{{ $viewData["review"]["raiting"] }}</p>
                @foreach($viewData["review"]->reviews as $review)
                    - {{ $review->getDescription() }}<br/>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection