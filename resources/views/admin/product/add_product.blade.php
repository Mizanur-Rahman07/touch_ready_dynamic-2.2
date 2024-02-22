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
                    <h4 class="card-title">Add Product</h4>
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
                                        <option selected>Select Type</option>
                                        @foreach($sectionTypes as $type)
                                        <option value="{{$type->id}}">{{$type->section_title}}
                                            {{$type->section_sub_title}}</option>
                                        @endforeach
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
                             
                                <div class="custom-control custom-switch">
                                    <input name="strock" value=1 type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Strock</label>
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
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Category </label>
                                            <div class="d-flex justify-content-between">
                                                <select name="category_id" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected>Select Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->category_title}}
                                                    </option>
                                                    @endforeach

                                                </select>
                                                <a class="fw-bold" href="{{route('add.category')}}">+</a>
                                            </div>

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