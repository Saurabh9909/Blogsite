<header id="header" class="fixed-top d-flex align-items-center header-transparent" style="background-color: #0d2735;">
    <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">
            <h1 class="text-light"><a href="javascript:void(0)"><span>Moderna</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <img src="{{ asset("assets/img/logo.png")}}" alt="" class="img-fluid">    -->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class='{{ request()->route()->getName() === 'home' ? 'active' : "" }}'
                        href="{{ route('home') }}"></span>Home</a></li>
                <li><a class='{{ request()->route()->getName() === 'blog' ? 'active' : "" }}'
                        href="{{ route("blog") }}"></span>Blogs</a></li>
                <li><a class='{{ request()->route()->getName() === 'aboutUs' ? 'active' : "" }}'
                        href="{{ route('aboutUs') }}"></span>About</a></li>
                <li><a class="{{ request()->route()->getName() === 'services' ? 'active' : "" }}'
                        href="{{ route('services') }}"></span>Services</a></li>
                @if (Auth::user() == true)
                    <li><a href="{{ route("admin.home") }}"><span class="mdi mdi-login">dashboard</span></a></li>
                @else
                    <li><a href="{{ route("login") }}"><span class="mdi mdi-login">Log In</span></a></li>
                    <li><a href="{{ route("register") }}"><span class="mdi mdi-account-plus">Sign Up</span></a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->