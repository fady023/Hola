@extends('frontend.layouts.master')
@section('title', 'Services')
@section('content')

  <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/image 3.png') }}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-6">
                            <h6 class="mx-md-5 px-5 display-4 text-capitalize mb-3">&nbsp;</h6>
                            <h6 class="mx-md-5 px-5 display-4 text-capitalize mb-3">&nbsp;</h6>

                            <h6 class="mx-md-5 px-5 display-4 mb-3" style="color:#fff"><b>We do everything you need in <br>HOLA</b></h6>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Carousel End -->
   
   
<div class="container-fluid px-0 py-5 my-5">
    <div class="row mx-0 justify-content-center text-center">
        <div class="col-lg-6">
            <h2 class="d-inline-block py-1 px-2" style="color: #d2a4a1;margin-left: -6rem !important;font-style: italic;margin-left: -6rem !important;">
                Exclusive Services at<br> Our Salon.
            </h2>
        </div>
        <div class="col-lg-6">
            <h8 class="d-inline-block py-1 px-2" style="text-align: left;margin-left: -12rem !important;">
                Lorem ipsum dolor sit amet consectetur.<br>
                Libero augue convallis amet scelerisque iaculis blandit.<br>
                Diam gravida dignissim viverra convallis massa neque integer tortor maecenas.<br>
                Adipiscing in pellentesque nisl adipiscing eleifend gravida amet gravida laoreet.<br>
                Nisi non malesuada est etiam aliquet cursus.
            </h8>
        </div>
    </div>
</div><br><br><br>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            @foreach($Services as $Service)
            <div class="col-lg-4 col-md-6" style="margin-top: -70px;">
                <a href="{{url('services/sub-services',$Service->id )}}">
                    <div class="team mb-5">
                        <img class="img-fluid" src="{{url('services/',$Service->image)}}" alt="">
                        <div class="text-center">
                            <div class="teamicon-text text-white" style="background-color: #d2a4a1;z-index: 10;">
                                <img class="img-fluid" src="{{url('services/',$Service->icon)}}" alt="">
                            </div>
                            <div class="team-text text-white" style="background-color: #ededed;z-index: 10;">
                                <p class="m-0">{{ $Service->name }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<br>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center  mx-0" style="height: 350px;">
            <div class="col-lg-12">
                <div>
                    <img class="position-absolute w-100 h-60" src="{{ asset('frontend/img/serv.jpg') }}" style="object-fit: cover;">
                </div>
            </div>

        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>


<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active" style="min-height: 100vh;">
                <img class="position-absolute w-100 h-100" src="{{ asset('frontend/img/Rectangle 46.png') }}" style="object-fit: cover;">
            </div>

        </div>
    </div>
</div>

@endsection
