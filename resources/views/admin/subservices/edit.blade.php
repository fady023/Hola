@extends('layouts.vertical', ['title' => 'Update Sub Services', 'mode' => 'ltr'])
@section('content')

<!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard/admin/subservices/index/subservices">Sub Services</a></li>
                            <li class="breadcrumb-item active">Update Sub Services</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Update / Sub Services</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('subservicesUpdate',['admin','subservices' ,'update'])  }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $edit_subservice->id }}">

            <div class="form-group">
                <label class="required" for="title">Name <span class="text-danger">*</span></label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ $edit_subservice->name }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

             <div class="form-group">
                <label class="required" for="title">Price <span class="text-danger">*</span></label>
                <input class="form-control {{ $errors->has('prices') ? 'is-invalid' : '' }}" type="text" name="prices" id="prices" value="{{ $edit_subservice->prices }}" required>
                @if($errors->has('prices'))
                    <span class="text-danger">{{ $errors->first('prices') }}</span>
                @endif
            </div>

             <div class="form-group">
                    <label for="product-category">Services <span class="text-danger">*</span></label>
                    <select class="form-control select2 {{ $errors->has('service_id') ? 'is-invalid' : '' }}" name="service_id" id="service_id" required>
                        @foreach($Services as $Service)
                    <option value="{{ $Service->id }}" {{($edit_subservice->service_id==$Service->id)?' selected':''}}>{{ $Service->name }}</option>
                        @endforeach
                    </select>
            </div>


            <div class="form-group">
                <label class="required" for="photo">image</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="imageUploadInput">
                <label class="custom-file-label" for="imageUploadInput">Upload</label>
            </div>
                @error("cover")
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- end cover scope -->

            <div class="img-preview @if(!isset($edit_subservice->image)) d-none @endif p-2" style="height:100px;border:1px solid #eaeaea">
                <img src="{{url('subservices/',$edit_subservice->image)}}"style="height:100%" />
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection