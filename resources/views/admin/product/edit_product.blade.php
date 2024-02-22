@extends('admin.master')
@section('title')
Edit Product
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Product Form</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('update.product')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Title</label>
                                    <input type="text" class="form-control" name="product_title"
                                        value="{{$product->product_title}}" id="exampleInputUsername1"
                                        placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Type </label>
                                    <select name="product_type" value="{{$product->product_type}}" class="form-control"
                                        id="exampleFormControlSelect1">
                                        <option selected>Select Type</option>
                                        @foreach($sectionTypes as $type)
                                        <option value="{{$type->id}}" <?php if (!empty($type->id) && $type->id ==
                                            $product->product_type) {
                                            echo 'selected';
                                            }
                                            ?>>{{$type->section_title}}
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
                                            <img src="{{ asset($product->product_image) }}"
                                                style="width:80px; height: 80px; " alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantity </label>
                                            <input type="number" class="form-control" name="quantity"
                                                value="{{$product->quantity}}" id="exampleInputEmail1"
                                                placeholder="Enter Quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price </label>
                                    <input type="number" class="form-control" name="product_price"
                                        value="{{$product->product_price}}" id="exampleInputEmail1"
                                        placeholder="Enter Quantity">
                                </div>
                                <div class="custom-control custom-switch">
                                    <input value=1 {{$product->strock==1?'checked':''}}  name="strock" value="{{$product->strock}}" type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">Strock</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Sub Title</label>
                                    <input type="text" class="form-control" name="product_sub_title"
                                        value="{{$product->product_sub_title}}" id="exampleInputUsername1"
                                        placeholder="Enter Product Price">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category </label>
                                            <select name="category_id" value="{{$product->category_id}}"
                                                class="form-control" id="exampleFormControlSelect1">
                                                <!-- <option selected>Choose...</option> -->
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" <?php if (!empty($category->id) &&
                                                    $category->id == $product->category_id) {
                                                    echo 'selected';
                                                    }
                                                    ?>>{{$category->category_title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Author </label>
                                            <select name="author_id" value="{{$product->author_id}}"
                                                class="form-control" id="exampleFormControlSelect1">
                                                @foreach($authors as $author)
                                                <option value="{{$author->id}}" <?php if (!empty($author->id) &&
                                                    $author->id == $product->author_id) {
                                                    echo 'selected';
                                                    }
                                                    ?>>{{$author->author_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product URL</label>
                                    <input type="text" class="form-control" name="slug" value="{{$product->slug}}"
                                        id="exampleInputUsername1" placeholder="Enter Product Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Discount Price </label>
                                    <input type="number" class="form-control" name="product_discount_price"
                                        value="{{$product->product_discount_price}}" id="exampleInputEmail1"
                                        placeholder="Enter Quantity">
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