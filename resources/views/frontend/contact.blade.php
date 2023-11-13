@extends('frontend.layouts.master')
@section('title', 'Contact')
@section('content')

<br><br><br>

<div class="container-fluid py-5">

<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
      <div class="col-lg-6">
            <img src="{{ asset('frontend/img/Rectangle 59.png') }}" style="height:519px" class="img-fluid w-100">
        </div>

        <div class="col-lg-6">
            <h2 style="color: #d2a4a1;text-align: left;font-style: italic;">
                Get in touch
            </h2>
            <p style="text-align: left;">
            Are you looking for a specific service? We'd love to hear from you.<br>
            Here's how you can contact us.

            </p> <br>
            
<div class="col-lg-8">
                    <div class="contact-form">
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
                            <div class="control-group">
                                <button style="background-color: #000;" class="btn btn-primary py-3 px-4" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>


        </div>
      
    </div>
</div></div><br><br><br>


@endsection
