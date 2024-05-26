  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="mb-0 text-primary text-uppercase"><i class="fa fa-cut me-3"></i>{{ config('app.name', 'FEMILUX') }}</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ areActiveRoutes(['home']) }}">Home</a>
            <a href="{{ route('site.about') }}" class="nav-item nav-link {{ areActiveRoutes(['site.about']) }}">About</a>
            <a href="{{ route('site.services') }}" class="nav-item nav-link {{ areActiveRoutes(['site.services']) }}">Service</a>
            <div class="nav-item dropdown d-none">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="price.html" class="dropdown-item">Pricing Plan</a>
                    <a href="team.html" class="dropdown-item">Our Barber</a>
                    <a href="open.html" class="dropdown-item">Working Hours</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="{{ route('site.contact') }}" class="nav-item nav-link {{ areActiveRoutes(['site.contact']) }}">Contact</a>
        </div>
        <a href="#" data-bs-toggle="modal" data-bs-target="#bookingModal" class="btn btn-primary rounded-0 py-2 px-lg-4 d-lg-block">Appointment<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->
