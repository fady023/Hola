@extends('layouts.vertical', ['title' => 'Add Services', 'mode' => 'ltr'])
@section('content')

<!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/dashboard/admin/services/index/services">Services</a></li>
                            <li class="breadcrumb-item active">Add Services</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add / Services</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

<div class="card">
    <div class="card-body">
        <form method="POST" action="{{ route('servicesStore',['admin','services' ,'store'])  }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="product-description">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" name="description" rows="5" placeholder="Please enter description" required></textarea>
            </div>
             <div class="form-group">
                <label class="required" for="photo">Logo</label>
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" required>
                  <label class="custom-file-label" for="imageUploadInput">Uplaod</label>
              </div>
            </div>

             <div class="form-group">
                <label class="required" for="photo">Logo</label>
                <div class="custom-file">
                  <input type="file" name="icon" class="custom-file-input"  required>
                  <label class="custom-file-label" for="imageUploadInput">Uplaod</label>
              </div>
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