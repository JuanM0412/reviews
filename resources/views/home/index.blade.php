@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-2 col-lg-2 mb-2 text-center">
            <button type="button" class="btn btn-primary">
                <a href="{{ route('review.create') }}" style="color: white; text-decoration: none;">Create review</a>
            </button>
        </div>
        <div class="col-md-2 col-lg-2 mb-2 text-center">
            <button type="button" class="btn btn-primary">
                <a href="{{ route('review.index') }}" style="color: white; text-decoration: none;">Show reviews</a>
            </button>
        </div>
    </div>
@endsection