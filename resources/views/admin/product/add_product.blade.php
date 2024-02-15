@extends('admin.master')
@section('title')
Add Product
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Product Form</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('new.product')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Title</label>
                                    <input type="text" class="form-control" name="product_title"
                                        id="exampleInputUsername1" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Type </label>
                                    <select name="product_type" class="form-control" id="exampleFormControlSelect1">
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
                                            <input type="file" class="form-control" name="product_image"
                                                id="exampleInputUsername1" placeholder="Enter Product Price">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantity </label>
                                            <input type="number" class="form-control" name="quantity"
                                                id="exampleInputEmail1" placeholder="Enter Quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price </label>
                                    <input type="number" class="form-control" name="product_price"
                                        id="exampleInputEmail1" placeholder="Enter Quantity">
                                </div>
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-label">
                                        <input name="strock" type="checkbox" class="form-check-input">
                                        Strock
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Sub Title</label>
                                    <input type="text" class="form-control" name="product_sub_title"
                                        id="exampleInputUsername1" placeholder="Enter Product Price">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category </label>
                                            <select name="category_id" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option selected>Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_title}}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Author </label>
                                            <select name="author_id" class="form-control"
                                                id="exampleFormControlSelect1">
                                                <option selected>Select Author</option>
                                                @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->author_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product URL</label>
                                    <input type="text" class="form-control" name="slug" id="exampleInputUsername1"
                                        placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Discount Price </label>
                                    <input type="number" class="form-control" name="product_discount_price"
                                        id="exampleInputEmail1" placeholder="Enter Quantity">
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-light">Cancel</button>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection