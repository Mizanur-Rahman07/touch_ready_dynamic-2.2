@extends('admin.master')
@section('title')
Edit Users
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Users Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('update.user')}}" method="POST" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $users->id}}">
                        <div class="form-group">
                            <label for="exampleInputUsername1">User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $users->name }}" id="exampleInputUsername1" placeholder="Enter User Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">User Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $users->email }}" id="exampleInputEmail1" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone No </label>
                            <input type="text" class="form-control" name="phone" value="{{ $users->phone }}" id="exampleInputEmail1" placeholder="Enter phone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1">User Image</label>
                            <input type="file" class="form-control" name="image" id="exampleInputUsername1"></br>
                            <img src="{{ asset($users->image) }}" style="width:80px; height: 80px; " alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $users->address }}" id="exampleInputEmail1" placeholder="Enter address">
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