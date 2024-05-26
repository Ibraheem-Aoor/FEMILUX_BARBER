<!-- Footer Start -->
<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">{{ __('site.get_in_touch') }}</h4>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <span>{{ @$settings['address'] }}</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <span>{{ @$settings['phone'] }}</span>
                </div>
                <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <span>{{ @$settings['email'] }}</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">{{ __('site.quick_links') }}</h4>
                <a class="btn btn-link" href="">{{ __('site.about_us') }}</a>
                <a class="btn btn-link" href="">{{ __('site.contact_us') }}</a>
                <a class="btn btn-link" href="">{{ __('site.our_services') }}</a>
                <a class="btn btn-link" href="">{{ __('site.terms_condition') }}</a>
                <a class="btn btn-link" href="">{{ __('site.support') }}</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-uppercase mb-4">{{ __('site.newsletter') }}</h4>
                <div class="position-relative mb-4">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="{{ __('site.your_email') }}">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">{{ __('site.signup') }}</button>
                </div>
                <div class="d-flex pt-1 m-n1">
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">{{ config('app.name') }}</a>, {{ __('site.all_right_reserved') }}.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    {{ __('site.developed_by') }} <a class="border-bottom" href="https://hyper-sys.com">Hyper Systems</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
