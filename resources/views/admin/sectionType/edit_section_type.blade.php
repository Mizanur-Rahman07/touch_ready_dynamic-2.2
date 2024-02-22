@extends('admin.master')
@section('title')
Edit Our Talk
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-description">
                    </p>
                    <form action="{{ route ('update.section.type')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <input type="hidden" name="secType_id" value="{{ $secTypes->id}}">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Title</label>
                            <input type="text" class="form-control" name="section_title"  value="{{ $secTypes->section_title }}" id="exampleInputUsername1"
                                placeholder="Enter Title">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Sub Title </label>
                            <input type="text" class="form-control" name="section_sub_title" value="{{ $secTypes->section_sub_title }}" id="exampleInputEmail1"
                                placeholder="Enter Sub Title">
                        </div>
                        <div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection