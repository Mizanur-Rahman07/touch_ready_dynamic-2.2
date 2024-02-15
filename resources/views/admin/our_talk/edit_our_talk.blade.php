@extends('admin.master')
@section('title')
Edit Our Talk
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Our Talk Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('update.ourtalk')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <input type="hidden" name="ourTalk_id" value="{{ $ourTalks->id}}">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Content</label>
                            <input type="text" class="form-control" name="our_talk_content" value="{{ $ourTalks->our_talk_content }} id="exampleInputUsername1" placeholder="Enter advertise Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">Video</label>
                            <input type="text" class="form-control" name="our_talk_video" id="exampleInputUsername1"></br>
                             <iframe class="ourTalk_video" style="height: 80px; width: 80px;" src="{{ asset($ourTalks->our_talk_video) }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">ourTalks URL </label>
                            <input type="text" class="form-control" name="slug" id="exampleInputEmail1" value="{{ $ourTalks->slug }}" placeholder="Enter advertise URL">
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