@extends('layouts.vertical', ['title' => 'Update Services', 'mode' => 'ltr'])
@section('content')

<!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard/admin/services/index/services">Services</a></li>
                            <li class="breadcrumb-item active">Update Services</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Update / Services</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('servicesUpdate',['admin','services' ,'update'])  }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $edit_service->id }}">

            <div class="form-group">
                <label class="required" for="title">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ $edit_service->name }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
             <div class="form-group mb-3">
                <label for="product-description">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" name="description" rows="5" placeholder="Please enter description" required>
                {{ $edit_service->description }}
                </textarea>
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

            <div class="img-preview @if(!isset($edit_service->image)) d-none @endif p-2" style="height:100px;border:1px solid #eaeaea">
                <img src="{{url('services/',$edit_service->image)}}"style="height:100%" />
            </div>


            <div class="form-group">
                <label class="required" for="photo">icon</label>
            <div class="custom-file">
                <input type="file" name="icon" class="custom-file-input" id="imageUploadInput">
                <label class="custom-file-label" for="imageUploadInput">Upload</label>
            </div>
                @error("cover")
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <!-- end cover scope -->

            <div class="img-preview @if(!isset($edit_service->icon)) d-none @endif p-2" style="background-color: #D2A4A1;height:100px;border:1px solid #eaeaea">
                <img src="{{url('services/',$edit_service->icon)}}"style="height:100%" />
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