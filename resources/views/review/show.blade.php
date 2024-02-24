@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $viewData["subtitle"] }}</h5>
            <p class="card-text"><strong>ID:</strong> {{ $viewData["review"]["id"] }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $viewData["review"]["description"] }}</p>
            <p class="card-text"><strong>Rating:</strong> {{ $viewData["review"]["rating"] }}</p>
            <p class="card-text"><strong>Created at:</strong> {{ $viewData["review"]["created_at"] }}</p>
            <div class="text-center">
                <a href="{{ route('review.delete', ['id'=> $viewData["review"]["id"]]) }}" class="btn bg-primary text-white">Delete review</a>
            </div>
        </div>
    </div>
</div>
@endsection