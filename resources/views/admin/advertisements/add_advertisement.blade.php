@extends('admin.master')
@section('title')
Add Advertisement
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Advertisement Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('new.advertisement')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Advertisement Title</label>
                            <input type="text" class="form-control" name="advertisement_title" id="exampleInputUsername1" placeholder="Enter advertise Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Advertisement Image</label>
                            <input type="file" class="form-control" name="advertisement_image" id="exampleInputUsername1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Advertisement URL </label>
                            <input type="text" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Enter advertise URL">
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