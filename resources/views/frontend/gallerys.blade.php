@extends('frontend.layouts.master')
@section('title', 'gallery')
@section('content')

<br><br><br><br><br><br><br>

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-12 ">
                <img src="{{ asset('frontend/img/Rectangle 58.png') }}" style="object-fit: cover;" class="img-fluid w-300">
            </div>

        </div>
    </div>
</div>
<br>

<div class="container py-5">

    <div class="row">

        <div class="tabs">
            @foreach($Services as $Service)

            <input type="radio" onclick="location.href='{{ url('/gallery/'.$Service->id) }}';" name="tabs" value={{ $Service->id }} id="tab{{ $Service->id}}" @if($Service->id == $id) checked="checked" @endif>
            <label for="tab{{ $Service->id }}" class="titleheader"><img src="{{url('services/',$Service->icon)}}">&nbsp;{{ $Service->name }}</label>

            <div class="tab">
                <div class="row">
                    @foreach($gallerys as $gallery)
                    <div class="col-lg-4 col-md-6" style="padding: 15px 17px;">
                        <img src="{{url('portfolio/',$gallery->image)}}" class="card-img-top" style="height: 390px;">
                    </div>
                    @endforeach
                </div>
            </div>

            @endforeach

        </div>

    </div>

</div>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>

@endsection
