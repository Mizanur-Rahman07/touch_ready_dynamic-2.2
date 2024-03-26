@extends('admin.master')
@section('title')
User List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">All User List</h4>
            <!-- Button trigger modal -->
            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"
                    data-bs-toggle="tooltip" title="Add user" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle"> User Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-description">
                                                </p>
                                                <form action="{{ route('new.user') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <h4>New here?</h4>
                                                    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1"
                                                            placeholder="Enter Username">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control form-control-lg" id="exampleInputUsername1"
                                                            placeholder="Enter email or Phone No">
                                                    </div><br>

                                                    <div class="form-group">
                                                        <input  type="text" name="phone" class="form-control form-control-lg" id="number"
                                                            placeholder="number">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <input  type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                                            placeholder="Password">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <input  type="text" name="address" class="form-control form-control-lg" id="address"
                                                            placeholder="address">
                                                    </div><br>
                                                    <div class="form-group">
                                                        <input  type="file" name="image" class="form-control form-control-lg" id="image"
                                                            placeholder="">
                                                    </div><br>
                                                
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
                        </div>

                    </div>
                </div>
            </div>


            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Sl No</td>
                            <th> User Name</th>
                            <th>Email</th>
                            <th> Phone No</th>
                            <th> Image</th>
                            <th> Address</th>
                            <th>Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($users as $user)
                        <tr class="table-info">
                            <td>{{ $i++ }}</td>
                            <td>{{ $user->name}}</td>
                            <td>{{ $user->email}}</td>
                            <td>{{ $user->phone}}</td>
                            <td>
                                <img src="{{ asset($user->image) }}" style="height:60px; width:60px;" alt=""
                                    srcset="">
                            </td>
                            <td>{{ $user->address}}</td>
                            <td>{{ $user->status == 1 ? 'Active' : 'In Active' }}</td>
                            <td class="d-flex justify-content">

                                @if($user->status == 1)
                                <a href=" {{route('user.status', ['id' => $user->id])}}"
                                    class="btn btn-primary mr-1" data-bs-toggle="tooltip" title="Active"><i
                                        class="fa-brands fa-creative-commons-by"></i></a>
                                @else
                                <a href=" {{route('user.status', ['id' => $user->id])}}"
                                    class="btn btn-warning mr-1" data-bs-toggle="tooltip" title="Deactive"><i
                                        class="fa-solid fa-person-arrow-down-to-line"></i></a>
                                @endif

                                <a href=" {{route('edit.user', ['id' => $user->id])}}"
                                    class="btn btn-success mr-1 " data-bs-toggle="tooltip" title="Edit"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('delete.user')}}" method="POST" id="delete">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <button type="submit" class="btn btn-danger" title="Delete"
                                        onclick="return confirm('Are You Sure delete this!!')" data-bs-toggle="tooltip"
                                        title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection