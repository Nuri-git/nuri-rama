@extends('layouts.master')

@section('content')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Contact Us</h1>
                        <p class="text-white">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <form class="contact-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="fname">First name</label>
                                    <input type="text" class="form-control" id="fname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Last name</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black" for="email">Email address</label>
                            <input type="email" class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="message">Message</label>
                            <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-house"></span>
                        <address class="text">
                            155 Market St #101, Paterson, NJ 07505, United States
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-phone-call"></span>
                        <address class="text">
                            +1 202 2020 200
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-mail"></span>
                        <address class="text">
                            @info@mydomain.com
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="untree_co-section testimonial-section mt-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title text-center mb-5">Testimonials</h2>

                    <div class="owl-single owl-carousel no-nav">
                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="/tour/images/person_2.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Adam Aderson</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="/tour/images/person_3.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Lukas Devlin</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="/tour/images/person_4.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Kayla Bryant</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection