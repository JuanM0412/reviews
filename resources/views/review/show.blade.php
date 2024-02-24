@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <p class="card-text">{{ $viewData["review"]["id"] }}</p>
                <h5 class="card-title">
                    {{ $viewData["review"]["description"] }}
                </h5>
                <p class="card-text">Rating: {{ $viewData["review"]["rating"] }}</p>
                <p class="card-text">Created at: {{ $viewData["review"]["created_at"] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection