@extends('layouts.top')
@section('title','Contact')
@section('content')
<section class="inner-header-bg">
        <div class="container">
            <!-- Breadcrumb Start-->
            <div class="section-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 justify-content-center align-self-center pb-2">
                            <div class="breadcrumb-content">
                                <div class="title-section">
                                    <h1 class="title text-center text-white">Contact Us</h1>
                                </div>
                                <div class="breadcrumb-nav">
                                    <ul class="breadcrumb-link text-center list-unstyled mb-0">
                                        <li class="text-white"><a href="{{url('/')}}">Home</a></li>
                                        <li class="text-white active">Contact Us</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->
        </div>
    </section>
    <!-- BradCrumb header End -->
    <!-- Google Map Section Start-->
    <div class="p-0">
        <div class="google-map" style="width:100%;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127188.21044231296!2d8.2779546617117!3d5.000705282503593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106786455c7008db%3A0x3594d5146156dd76!2sUniversity%20of%20Calabar%2C%20Calabar!5e0!3m2!1sen!2sng!4v1656160185283!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
    <!-- Google Map Section End-->
    <!-- Google Map Section End-->
    <section class="section section-contactus contactus-section">
        <div class="container">

            <div class="wow fadeIn" data-wow-delay="0.1s" data-wow-duration="1s">
                <div class="title-section">
                    <div class="subtitle-hr d-flex align-items-center">
                        <h6 class="subtitle theme-color text-uppercase position-relative">Contact</h6>
                      
                    </div>
                   
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-sm-6 text-sm-left text-center">
                            <h6 class="green-color text-uppercase">Visit Our Office</h6>
                            <p class="text-dark res-h3-small">
                             
                                The University of Calabar Trust and Endowment Fund Limited/Guarantee
    <br/>New Senate Chambers Building, University of Calabar, Calabar
                                
        </p>
                        </div>
                        <div class="col-sm-6 mt-sm-0 mt-4 text-sm-left text-center">
                            <h6 class="green-color text-uppercase">Or Send Mail Us</h6>
                            <h3 class="text-dark res-h3-small">
                                <a href="mailto:info@yourdomain.com" class="text-dark">
                                info.alumnidesk@unical.edu.ng 
                                </a>,
                                <br>
                                <a href="tel:+2349132761182" class="text-dark">+2349132761182</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <form class="common-input-form mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control border-0" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control border-0" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input name="subject" id="subject" type="text" class="form-control border-0" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="comments" id="comments" rows="2" class="form-control border-0" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="mt-2 btn theme-btn contact-form-btn border-0" value="Send">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection