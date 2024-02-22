@extends('admin.master')
@section('title')
Product List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Product List</h4>
            <!-- Button trigger modal -->
            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"
                    data-bs-toggle="tooltip" title="Add category" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
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
                                                <form action="{{ route ('new.product')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Product Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="product_title" id="exampleInputUsername1"
                                                                    placeholder="Enter Product Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Type </label>
                                                                <select name="product_type" class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option selected>Choose...</option>
                                                                    <option value="1">Product</option>
                                                                    <option value="2">Hot Discount Product</option>
                                                                    <option value="3">Fasion</option>
                                                                    <option value="3">Kids Zone</option>
                                                                    <option value="3">Book </option>
                                                                </select>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputUsername1">Image</label>
                                                                        <input type="file" class="form-control"
                                                                            name="product_image"
                                                                            id="exampleInputUsername1"
                                                                            placeholder="Enter Product Price">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Quantity
                                                                        </label>
                                                                        <input type="number" class="form-control"
                                                                            name="quantity" id="exampleInputEmail1"
                                                                            placeholder="Enter Quantity">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Product Price </label>
                                                                <input type="number" class="form-control"
                                                                    name="product_price" id="exampleInputEmail1"
                                                                    placeholder="Enter Quantity">
                                                            </div>
                                                            <div class="form-check form-check-flat form-check-primary">
                                                                <label class="form-check-label">
                                                                    <input name="strock" type="checkbox"
                                                                        class="form-check-input">
                                                                    Strock
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Product Sub
                                                                    Title</label>
                                                                <input type="text" class="form-control"
                                                                    name="product_sub_title" id="exampleInputUsername1"
                                                                    placeholder="Enter Product Price">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Product URL</label>
                                                                <input type="text" class="form-control" name="slug"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Product Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Discount Price </label>
                                                                <input type="number" class="form-control"
                                                                    name="product_discount_price"
                                                                    id="exampleInputEmail1"
                                                                    placeholder="Enter Quantity">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="text-right">
                                                        <button class="btn btn-light">Cancel</button>
                                                        <button type="submit"
                                                            class="btn btn-primary mr-2">Submit</button>
                                                    </div>
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
                            <th> Product Title</th>
                            <th> Product Type</th>
                            <th> Category</th>
                            <th> Author</th>
                            <th> Image</th>
                            <th> Price</th>
                            <th> Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($products as $product)
                        <tr class="table-info">
                            <td>{{ $i++ }}</td>
                            <td>{{ $product->product_title}}</td>
                            <td>{{ $product->section_title }} {{ $product->section_sub_title }}</td>
                            <td>{{ $product->category_title }}</td>
                            <td>{{ $product->author_name }}</td>
                            <td>
                                <img src="{{ asset($product->product_image) }}" style="height:60px; width:60px;" alt=""
                                    srcset="">
                            </td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->status==1? 'Active':'In Active' }}</td>
                            <td class="d-flex justify-content">

                                @if($product->status==1)
                                <a href=" {{route ('product.status',['id'=>$product->id])}}"
                                    class="btn btn-primary mr-1" data-bs-toggle="tooltip" title="Active"><i
                                        class="fa-brands fa-creative-commons-by"></i></a>
                                @else
                                <a href=" {{route ('product.status',['id'=>$product->id])}}"
                                    class="btn btn-warning mr-1" data-bs-toggle="tooltip" title="Deactive"><i
                                        class="fa-solid fa-person-arrow-down-to-line"></i></a>
                                @endif

                                <a href=" {{route ('edit.product',['id'=>$product->id])}}" class="btn btn-success mr-1 "
                                    data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('delete.product')}}" method="POST" id="delete">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
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