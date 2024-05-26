@extends('layouts.site.master')
@section('title', $page_title)

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/site/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">
                                {{ __('site.we_will_keep_you_an_awesome_look') }}</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-primary me-3"></i>{{ @$settings['address'] }}</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-phone-alt text-primary me-3"></i>{{ $settings['phone'] }}</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/site/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">
                                {{ __('site.luxury_haircut_at_affordable_price') }}</h1>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-map-marker-alt text-primary me-3"></i>{{ @$settings['address'] }}</h4>
                            <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i
                                    class="fa fa-phone-alt text-primary me-3"></i>{{ $settings['phone'] }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('site.previous') }}</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ __('site.next') }}</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {!! $about_page->content !!}
        </div>
    </div>
    <!-- About End -->



    <!-- Service Start -->
    @include('site.partials.services', ['service' => $services])
    <!-- Service End -->


    <!-- Price Start -->
    @if (!$services->isEmpty())
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                            <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">
                                {{ __('site.service_and_price') }}</p>
                            <h1 class="text-uppercase mb-4">{{ __('site.check_out_our_barber_services_and_prices') }}</h1>
                            <div>
                                @foreach ($services as $service)
                                    <div class="d-flex justify-content-between border-bottom py-2">
                                        <h6 class="text-uppercase mb-0">{{ $service->title }}</h6>
                                        <span class="text-uppercase text-primary">{{ formatPrice($service->price) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100">
                            <img class="img-fluid h-100" src="{{ asset('assets/site/img/price.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <!-- Price End -->


    <!-- Team Start -->
    @if (!$barbers->isEmpty())
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block bg-secondary text-primary py-1 px-4">{{ __('site.our_barber') }}</p>
                    <h1 class="text-uppercase">{{ __('site.meet_our_barber') }}</h1>
                </div>
                <div class="row g-4">
                    @foreach ($barbers as $barber)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ getImageUrl($barber->image) }}"
                                        alt="{{ $barber->name }}">
                                    <div class="team-social">
                                        {{-- <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a> --}}
                                    </div>
                                </div>
                                <div class="bg-secondary text-center p-4">
                                    <h5 class="text-uppercase">{{ $barber->name }}</h5>
                                    <span class="text-primary d-none">{{ __('site.designation') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Team End -->


    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="{{ asset('assets/site/img/open.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">{{ __('site.working_hours') }}</p>
                        <h1 class="text-uppercase mb-4">{{ __('site.professional_barbers_are_waiting_for_you') }}</h1>
                        <div>
                            @foreach ($week_days as $day)
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="text-uppercase mb-0">{{ __('site.' . $day) }}</h6>
                                    @php
                                        $off_day = true;
                                        $hours_from = $day . '_hours_from';
                                        $hours_to = $day . '_hours_to';

                                        if (!is_null($work_hours->$hours_from)) {
                                            $off_day = false;
                                            $time_from_24 = \Carbon\Carbon::createFromFormat(
                                                'H:i',
                                                $work_hours->$hours_from,
                                            );
                                            $time_to_24 = \Carbon\Carbon::createFromFormat(
                                                'H:i',
                                                $work_hours->$hours_to,
                                            );
                                            $time_from_12 = $time_from_24->format('g:i A');
                                            $time_to_12 = $time_to_24->format('g:i A');
                                        }
                                    @endphp
                                    @if ($off_day)
                                        <span class="text-uppercase text-primary">{{ __('site.closed') }}</span>
                                    @else
                                        <span class="text-uppercase">{{ $time_from_12 }} - {{ $time_to_12 }}</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Hours End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5 d-none">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/site/img/testimonial-1.jpg') }}' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/site/img/testimonial-2.jpg') }}' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/site/img/testimonial-3.jpg') }}' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Profession</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection

