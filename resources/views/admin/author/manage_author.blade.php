@extends('admin.master')
@section('title')
Author List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
           
            <h4 class="card-title">All Authors List</h4>
            <!-- Button trigger modal -->
            <div class=" d-flex justify-content-end">
            <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"  data-bs-toggle="tooltip" title="Add Author" data-target="#exampleModalCenter">
            <i class="fa-solid fa-user-plus"></i>
            </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Author Form</h5>
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
                                                <form action="{{ route ('new.author')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Author Name</label>
                                                        <input type="text" class="form-control" name="author_name"
                                                            id="exampleInputUsername1" placeholder="Enter Author Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">Author Image</label>
                                                        <input type="file" class="form-control" name="author_image"
                                                            id="exampleInputUsername1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Author URL </label>
                                                        <input type="text" class="form-control" name="slug"
                                                            id="exampleInputEmail1" placeholder="Enter author URL">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Discount </label>
                                                        <input type="number" class="form-control" name="author_discount"
                                                            id="exampleInputEmail1" placeholder="Enter Up to Discount">
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
                        </div>

                    </div>
                </div>
            </div>


            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Sl No</td>
                            <th> Author Name</th>
                            <th> Author Image</th>
                            <th>Up To Discount</th>
                            <th>Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($authors as $author)
                        <tr class="table-info">
                            <td>{{ $i++ }}</td>
                            <td>{{ $author->author_name}}</td>
                            <td>
                                <img src="{{ asset($author->author_image) }}" style="height:60px; width:60px;" alt=""
                                    srcset="">
                            </td>
                            <td>{{ $author->author_discount }}</td>
                            <td>{{ $author->status==1? 'Active':'In Active' }}</td>
                            <td class="d-flex justify-content">

                                @if($author->status==1)
                                <a href=" {{route ('author.status',['id'=>$author->id])}}" class="btn btn-primary mr-1"
                                    data-bs-toggle="tooltip" title="Active"><i
                                        class="fa-brands fa-creative-commons-by"></i></a>
                                @else
                                <a href=" {{route ('author.status',['id'=>$author->id])}}" class="btn btn-warning mr-1"
                                    data-bs-toggle="tooltip" title="Deactive"><i
                                        class="fa-solid fa-person-arrow-down-to-line"></i></a>
                                @endif

                                <a href=" {{route ('edit.author',['id'=>$author->id])}}" class="btn btn-success mr-1 "
                                    data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('delete.author')}}" method="POST" id="delete">
                                    @csrf
                                    <input type="hidden" name="author_id" value="{{$author->id}}">
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