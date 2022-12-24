<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('vendors/adminlte') }}/dist/css/adminlte.min.css">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li> --}}
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('vendors/adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <div class="sidebar mt-4">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}" class="nav-link @yield('dashboard_active')">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home-setting.index') }}" class="nav-link @yield('home_active')">
                                <i class="nav-icon fas fa-laptop-house"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('offer-list.index') }}" class="nav-link @yield('offer_active')">
                                <i class="nav-icon fas fa-dollar-sign"></i>
                                <p>Offer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('villa-list.index') }}" class="nav-link @yield('villa_active')">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>Villa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('experience-list.index') }}" class="nav-link @yield('experience_active')">
                                <i class="nav-icon fas fa-hiking"></i>
                                <p>Experience</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('spa-list.index') }}" class="nav-link @yield('spa_active')">
                                <i class="nav-icon fas fa-spa"></i>
                                <p>Spa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('restaurant-list.index') }}" class="nav-link @yield('restaurant_active')">
                                <i class="nav-icon fas fa-utensils"></i>
                                <p>Restaurant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('wedding-list.index') }}" class="nav-link @yield('wedding_active')">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>Wedding</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('gallery-list.index') }}" class="nav-link @yield('gallery_active')">
                                <i class="nav-icon fas fa-images"></i>
                                <p>Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact-us-setting.index') }}" class="nav-link @yield('contact_us_active')">
                                <i class="nav-icon fas fa-phone-volume"></i>
                                <p>Contact Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page-list.index') }}" class="nav-link @yield('page_active')">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Other Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('award-list.index') }}" class="nav-link @yield('award_active')">
                                <i class="nav-icon fas fa-trophy"></i>
                                <p>Award</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('press-room-list.index') }}" class="nav-link @yield('press_room_active')">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>Press Room</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('career-list.index') }}" class="nav-link @yield('career_active')">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>Career</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog-list.index') }}" class="nav-link @yield('blog_active')">
                                <i class="nav-icon fab fa-blogger-b"></i>
                                <p>Blog</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            {{ $slot }}
        </div>

        <footer class="main-footer">
            Created with <i class="fas fa-heart"></i> by <a href="https://instagram.com/a_dev.id">a-dev</a>. Template by <a href="https://adminlte.io">AdminLTE.io</a>.
        </footer>
    </div>

    <script src="{{ asset('vendors/adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('vendors/adminlte') }}/dist/js/adminlte.min.js"></script>
    @stack('js')
</body>

</html>
