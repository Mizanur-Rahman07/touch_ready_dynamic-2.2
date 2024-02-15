@extends('admin.master')
@section('title')
Category List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
           
            <h4 class="card-title">All categorys List</h4>
            <!-- Button trigger modal -->
            <div class=" d-flex justify-content-end">
            <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"  data-bs-toggle="tooltip" title="Add category" data-target="#exampleModalCenter">
            <i class="fa-solid fa-user-plus"></i>
            </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add category Form</h5>
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
                                                <form action="{{ route ('new.category')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">category Name</label>
                                                        <input type="text" class="form-control" name="category_title"
                                                            id="exampleInputUsername1" placeholder="Enter category Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputUsername1">category Image</label>
                                                        <input type="file" class="form-control" name="category_image"
                                                            id="exampleInputUsername1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">category URL </label>
                                                        <input type="text" class="form-control" name="slug"
                                                            id="exampleInputEmail1" placeholder="Enter category URL">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Discount </label>
                                                        <input type="number" class="form-control" name="category_discount"
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
                            <th> Category Title</th>
                            <th> Category Image</th>
                            <th>Up To Discount</th>
                            <th>Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($categories as $category)
                        <tr class="table-info">
                            <td>{{ $i++ }}</td>
                            <td>{{ $category->category_title}}</td>
                            <td>
                                <img src="{{ asset($category->category_image) }}" style="height:60px; width:60px;" alt=""
                                    srcset="">
                            </td>
                            <td>{{ $category->category_discount}}</td>
                            <td>{{ $category->status==1? 'Active':'In Active' }}</td>
                            <td class="d-flex justify-content">

                                @if($category->status==1)
                                <a href=" {{route ('category.status',['id'=>$category->id])}}" class="btn btn-primary mr-1"
                                    data-bs-toggle="tooltip" title="Active"><i
                                        class="fa-brands fa-creative-commons-by"></i></a>
                                @else
                                <a href=" {{route ('category.status',['id'=>$category->id])}}" class="btn btn-warning mr-1"
                                    data-bs-toggle="tooltip" title="Deactive"><i
                                        class="fa-solid fa-person-arrow-down-to-line"></i></a>
                                @endif

                                <a href=" {{route ('edit.category',['id'=>$category->id])}}" class="btn btn-success mr-1 "
                                    data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('delete.category')}}" method="POST" id="delete">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{$category->id}}">
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