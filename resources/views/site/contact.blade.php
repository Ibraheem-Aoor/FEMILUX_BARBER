@extends('layouts.site.master')
@section('title' , $page_title)

@section('content')
   <!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary p-5">
                    <p class="d-inline-block bg-dark text-primary py-1 px-4">{{ __('site.contact_us') }}</p>
                    <h1 class="text-uppercase mb-4">{{ __('site.have_any_query') }}</h1>
                    <p class="mb-4">{{ __('site.contact_form_inactive') }} <a href="https://htmlcodex.com/contact-form">{{ __('site.download_now') }}</a>.</p>
                    <form action="{{ route('site.contact.submit') }}" class="custom-form"  method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" name="name" placeholder="{{ __('site.your_name') }}">
                                    <label for="name">{{ __('site.your_name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" name="email" placeholder="{{ __('site.your_email') }}">
                                    <label for="email">{{ __('site.your_email') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="subject" name="subject" placeholder="{{ __('site.subject') }}">
                                    <label for="subject">{{ __('site.subject') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="{{ __('site.leave_message') }}" name="message" id="message" style="height: 100px"></textarea>
                                    <label for="message">{{ __('site.message') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">{{ __('site.send_message') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="google-map w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"
                        style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection


