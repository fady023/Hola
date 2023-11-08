@extends('frontend.layouts.master')
@section('title', 'Home')
@section('content')

<!-- Open Hours Start -->
<div class="container-fluid px-0 py-5 my-5" id="about">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-8">
            <h5 class="d-inline-block text-primary py-1 px-2">About Us</h5>
        </div>
    </div>
</div><br>

<div class="container-fluid py-5" >
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-7" style="min-height: 500px;">
                <div class="position-relative h-60">
                    <img class="position-absolute w-100 h-60" src="{{ asset('frontend/img/Rectangle 9.png') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-5 pt-5 pb-lg-5">
                <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                    <p style="color: #F6F6F6;font-size: 18px;">
                        From styling and cutting to extensions, coloring, perms and relaxers, Hola Ladies Beauty Center and our stylists can manage all of your hair care needs and desires Hola Ladies Beauty Center customises each treatment to fit your individual needs. We will provide you with the most effective treatment, skin care education and recommendations for your home skin care regimen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>



<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">


            <div class="col-lg-5 pt-5 pb-lg-5">
                <div class="hours-text2 bg-light p-4 p-lg-5 my-lg-5">
                    <p style="color: #F6F6F6;font-size:16px">
                        With Hola Beauty Center, youre treated like royalty.<br><br>
                        Were a ladys beauty center based in Abu Dhabi, UAE, providing<br>
                        all the women with various beauty services to reveal their<br>
                        natural glow.<br><br>

                        &#xb7; Every woman has her own beauty, and at Hola, we help you elevate your look and feel fabulous inside and out.<br><br>
                        &#xb7; We cover everything you need for your beauty, from nails, hair coloring and styling, eyelash extensions, massage, make-up, skin, and facial treatments. Book your appointment now.<br><br>
                        &#xb7; The best version of you starts here, with Hola Beauty Center. Get ready now to shine and feel confident with our premium services and our expert team.<br><br>
                    </p>
                </div>
            </div>

            <div class="col-lg-7" style="min-height: 500px;z-index: -5;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/Rectangle 10.png') }}" style="object-fit: cover;">
                </div>
            </div>



        </div>
    </div>
</div>

<br>


<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center bg-appointment mx-0" style="height: 285px;">
                <div class="col-lg-4">
                    <div>
                        <img class="position-absolute w-5 h-5" src="{{ asset('frontend/img/Pink Gradient Open Back Salon Business Landscape Poster 2.png') }}" style="object-fit: cover;">
                    </div>
                </div>
                 <div class="col-lg-8 py-3">
                    <div class="p-5 my-5">
                        <form>
                        <div class="col-sm-12 mb-5">
                            <h5 class="mb-4" style="color:#fff;font-size: 30px;font-style: italic;">Join Us and Embrace Your Beauty Journey!</h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;border-radius: 10px 0 0 10px;" placeholder="Enter your email">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4" style="border-radius: 0 10px 10px 0;background-color: #A5A5A5;">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
