<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
        <title>@yield('title', 'Reviews')</title>
    </head>
    <body>
        <!-- header -->
        <nav class="navbar navbar-expand-lg py-4">
            <div class="container">
                <a class="navbar-brand" style="color: white;" href="{{ route('home.index') }}">Reviews</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" style="color: white;" href="{{ route('review.create') }}">Create review</a>
                        <a class="nav-link active" style="color: white;" href="{{ route('review.index') }}">Show reviews</a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="masthead text-white text-center py-4" style="background-color: #06d6a0;">
            <div class="container d-flex align-items-center flex-column">
                <h2>@yield('subtitle', 'Workshop 1')</h2>
            </div>
        </header>
        <!-- header -->
        <div class="container my-4">
            @yield('content')
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    </body>
</html>