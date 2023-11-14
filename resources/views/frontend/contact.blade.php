@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')

<br><br><br>

<div class="container-fluid py-5">

<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
      <div class="col-lg-5">
            <img src="{{ asset('frontend/img/Rectangle 59.png') }}" style="height:400px" class="img-fluid w-100">
        </div>

        <div class="col-lg-6">
            <h2 style="color: #d2a4a1;text-align: left;font-style: italic;">
                Get in touch
                 <div class="d-flex justify-content-start mt-4" style="margin-top: -2.5rem !important;margin-left: 28.5rem !important;">
                        <a class="btn btn-lg  btn-lg-square mr-2" href="https://www.instagram.com/hola_beauty_center/?igshid=MzRlODBiNWFlZA%3D%3D"><h4><font color="#cb9e9b"><i class="fab fa-instagram"></i></h4></font> </a>
                        <a class="btn btn-lg  btn-lg-square " href="https://api.whatsapp.com/send?phone={{ $phone }}&text=%C2%A0"><h4><font color="#cb9e9b"><i  class="fab fa-whatsapp"></i></h4></font></a>
                       
                    </div>
            </h2>
            <p style="text-align: left;">
            Are you looking for a specific service? We'd love to hear from you.<br>
            Here's how you can contact us.

            </p> <br>
            
<div class="col-lg-8">
                    <div class="contact-form" style=" margin-left: -16px;">
                        <div id="success">
                         @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            {{ session('message') }}
                        </div>
                    @endif
                        </div>
                       <form method="post" action="{{ route('postcontact') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="text" class="form-control border-1 p-4" name="fullname" placeholder="Full Name" required="required" >
                                    <p></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control border-1 p-4" name="email" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <textarea class="form-control border-1 py-3 px-4" rows="3" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p></p>
                            </div>
                            <div class="control-group" style="margin-left: 26rem !important;">
                                <button style="background-color: #000;" class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>


        </div>
      
    </div>
</div></div>


@endsection
