@extends('admin.master')
@section('title')
Edit Product
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Author Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('update.author')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <input type="hidden" name="author_id" value="{{ $authors->id}}">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Author Name</label>
                            <input type="text" class="form-control" name="author_name" value="{{ $authors->author_name }}" id="exampleInputUsername1" placeholder="Enter Author Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Author Image</label>
                            <input type="file" class="form-control" name="author_image" id="exampleInputUsername1"></br>
                            <img src="{{ asset($authors->author_image) }}" style="width:80px; height: 80px; " alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Author URL </label>
                            <input type="text" class="form-control" name="slug" value="{{ $authors->slug }}" id="exampleInputEmail1" placeholder="Enter author URL">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Discount </label>
                            <input type="number" class="form-control" name="author_discount" value="{{ $authors->author_discount }}" id="exampleInputEmail1" placeholder="Enter Up to Discount">
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection