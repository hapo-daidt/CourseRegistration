<header class="site-header">
    <div class="header-wrapper">
        <div class="logo">
            <img src="{{ asset('images/LogoHapoLearn.svg') }}" alt="Logo">
        </div>
        <nav class="nav-links">
            <a href="{{ url('/') }}">HOME</a>
            <a href="{{ url('/courses') }}">ALL COURSES</a>
            <a href="{{ url('/login') }}"  class="selected">LOGIN/REGISTER</a>
            <a href="{{ url('/profile') }}">PROFILE</a>
        </nav>
    </div>
</header>
