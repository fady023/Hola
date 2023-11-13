@extends('frontend.layouts.master')
@section('title', 'Sub Services')
@section('content')

<br><br><br><br><br><br><br>

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8 pb-5 pb-lg-0">
                    <img src="{{url('services/',$Service_image)}}"style="height:496px" class="img-fluid w-100">
                </div>
                <div class="col-lg-4">
                    <div class="p-4 p-lg-5" style="background-color: #ededed;border-radius: 10px;margin-top: -140px;">
                            <p style="color:#2F2F2F;border-bottom: 3px solid #dee2e6 !important;">Services Category</p>
                           <div class="row">
                            @foreach($Services as $Service)
                                <div class="col-lg-10 col-md-6 text-white" >
                                    <a href="{{url('services/sub-services',$Service->id )}}">
                                        <p style="color:#2F2F2F;">{{ $Service->name }}<p>
                                    </a>
                                </div>
                                 <div class="col-lg-2 col-md-6 ">
                                    <a href="{{url('services/sub-services',$Service->id )}}">
                                        <img src="{{ asset('frontend/img/Group 27.png') }}" alt="" title="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<br>
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="col-lg-6">
            <h4 class="mb-2"><img src="{{url('services/',$Service_icon)}}" style="height:24px;background-color: #D2A4A1;" class="img-fluid w-10">&nbsp;&nbsp;{{ $Service_name }}</h4>
        </div>
         <div class="col-lg-6">
            <p class="mb-5">{{ $Service_description }}</p>
        </div>
        <div class="row">
            @foreach($SubServices as $SubService)
            <div class="col-lg-4 col-md-6" >
                <div class="team mb-5">
                    <img class="img-fluid" src="{{url('subservices/',$SubService->image)}}" alt="">
                    <div class="text-center">
                        <div class="text-white" style="top: 10px;color:#2F2F2F;z-index: 10;text-align: left;">
                            <h5 style="margin-top: 10px;">{{ $SubService->name }}</h5>
                        </div>
                        <div class="text-white" style="top: 5px;color:#2F2F2F;z-index: 10;text-align: left;">
                            <h4>{{ $SubService->prices }} Dhs</h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
