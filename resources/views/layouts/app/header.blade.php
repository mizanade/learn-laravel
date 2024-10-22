<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="flex-wrap d-flex align-items-center justify-content-center justify-content-lg-start">
            @if (Auth::check())
                <ul class="mb-2 nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0">
                    <li><a href="{{ url('posts') }}" class="px-2 text-white nav-link">Home</a></li>
                </ul>
            @endif

            <div class="text-end ms-auto">
                @if (Auth::check())
                    <a href="{{ url('logout') }}" type="button" class="btn btn-outline-light me-2">Logout</a>
                @else
                    <a href="{{ url('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ url('register') }}" type="button" class="btn btn-warning">Sign-up</a>
                @endif
            </div>
        </div>
    </div>
</header>
