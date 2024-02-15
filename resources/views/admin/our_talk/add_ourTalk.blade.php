@extends('admin.master')
@section('title')
Add Our Talk
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Our Talk Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('new.ourtalk')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Content</label>
                            <input type="text" class="form-control" name="our_talk_content" id="exampleInputUsername1" placeholder="Enter Content Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Video</label>
                            <input type="text" class="form-control" name="our_talk_video" id="exampleInputUsername1" placeholder="Enter Youtube Video Emded Link">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Our Talk URL </label>
                            <input type="text" class="form-control" name="slug" id="exampleInputEmail1" placeholder="Enter Our Talk URL">
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