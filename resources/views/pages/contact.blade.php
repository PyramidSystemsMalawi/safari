
@extends('layouts.main')

@section('content')
<!-- BANNER -->
<div class="section banner-page about">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="title-page">Contact Us</div>
                <ol class="breadcrumb">
                    <li><a href="index.html">Contact</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class="section contact overlap">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-md-push-8">
                <div class="widget download">
                    <a target="new" href="{{config('app.url')}}/safariPPL.pdf" class="btn btn-secondary btn-block btn-sidebar"><span class="fa  fa-file-pdf-o"></span> Company Brochure</a>
                </div>
                <div class="widget contact-info-sidebar">
                    <div class="widget-title">
                        Contact Info
                    </div>
                    <ul class="list-info">
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="info-text">Safari Petroleum Products Limited
                                38 du Industrial Area A, Abuja.
                                Federal Capital Territory Nigeria</div> </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="info-text">08 039 683 201</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="info-text">petroleumsafari@gmail.com</div>
                        </li>
                        <li>
                            <div class="info-icon">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="info-text">Mon - Sat 09:00 - 17:00</div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-8 col-md-8 col-md-pull-4">
                <div class="content">
                    <p class="section-heading-3">Get in touch with our officers and we usually respond within 24 hours.</p>
                    <div class="margin-bottom-30"></div>
                    <h3 class="section-heading-2">
                        Contact Details
                    </h3>
                    <form action="#" class="form-contact" id="contactForm" data-toggle="validator" novalidate="true">
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_name" placeholder="Full Name..." required="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="p_email" placeholder="Enter Address..." required="">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="p_subject" placeholder="Subject...">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                             <textarea id="p_message" class="form-control" rows="6" placeholder="Write message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;">ASK A QUOTE</button>
                        </div>
                    </form>
                    <div class="margin-bottom-50"></div>
                    <p><em>Note: We will reply via email. </em></p>
                 </div>
            </div>

        </div>

    </div>
</div>

<!-- MAPS -->
<div class="maps-wraper">
    <div id="cd-zoom-in"></div>
    <div id="cd-zoom-out"></div>
    <div id="maps" class="maps" data-lat="-7.452278" data-lng="112.708992" data-marker="images/cd-icon-location.png">
    </div>
</div>



@endsection
