@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @foreach ($viewData["reviews"] as $review)
        <div class="col-md-4 col-lg-3 mb-2">
            <div class="card">
                <div class="card-body">
                    <p>{{ $review["description"] }}</p>
                    <div class="text-center">
                        <a href="{{ route('review.show', ['id'=> $review["id"]]) }}" class="btn bg-primary text-white">{{ $review["id"] }}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection