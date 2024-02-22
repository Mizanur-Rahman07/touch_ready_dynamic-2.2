<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use App\Models\SectionType;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add_product',[
            'sectionTypes' => SectionType::where('status',1)->orderBy('id','desc')->get(),
            'categories' => Category::where('status',1)->orderBy('id','desc')->get(),
            'authors' => Author::where('status', 1)->orderBy('id', 'desc')->get()
        ]);
    }

    public function saveProduct(Request $request)
    {
        // return $request;
        $product = new Product();
        $product->product_title = $request->product_title;
        $product->product_sub_title = $request->product_sub_title;
        $product->author_id = $request->author_id;
        $product->product_type = $request->product_type;
        $product->category_id = $request->category_id;
        $product->product_image = $this->saveProductImage($request);
        $product->slug = $this->makeSlug($request);
        $product->product_price = $request->product_price;
        $product->product_discount_price = $request->product_discount_price;
        $product->quantity = $request->quantity;
        isset($request->strock)?$product->strock = $request->strock:$product->strock =0;
        
        $product->save();
        return redirect('/manage-product')->with('message', 'Product Add Successfully');
    }

    private function saveProductImage($request){
        $image = $request->file('product_image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/ProductImage/';
        $imgUrl = $directory . $imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }

    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->product_title;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function productStatus($id)
    {
        $product = Product::find($id);
        if ($product->status == 1) {
            $product->status = 0;
            $product->save();
            return back();
        } else {
            $product->status = 1;
            $product->save();
            return back();
        }
    }
    public function manageProduct()
    {
        $pro_table = DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id' )
        ->join('authors', 'products.author_id', 'authors.id' )
        ->join('section_types', 'products.product_type', 'section_types.id' )
        ->select('products.*','categories.category_title', 'authors.author_name','section_types.section_title','section_types.section_sub_title')
        ->get();
        return view('admin.product.manage_product', [
            'products' => $pro_table
        ]);
    }

    public function editProduct($id)
    {
        return view('admin.product.edit_product', [
            'sectionTypes' => SectionType::where('status',1)->orderBy('id','desc')->get(),
            'categories' => Category::where('status',1)->orderBy('id','desc')->get(),
            'authors' => Author::where('status', 1)->orderBy('id', 'desc')->get(),
            'product' => Product::find($id)
        ]);
    }

    public function updateProduct(Request $request)
    {
        // return $request;
        $product = Product::find($request->product_id);
        $product->product_title = $request->product_title;
        $product->product_sub_title = $request->product_sub_title;
        $product->author_id = $request->author_id;
        $product->product_type = $request->product_type;
        $product->category_id = $request->category_id;
        if ($request->file('product_image')) {
            if ($product->product_image) {
                unlink($product->product_image);
            }
            $product->product_image = $this->saveProductImage($request);
        }
        $product->slug = $this->makeSlug($request);
        $product->product_price = $request->product_price;
        $product->product_discount_price = $request->product_discount_price;
        $product->quantity = $request->quantity;
        isset($request->strock)?$product->strock = $request->strock:$product->strock =0;
        $product->save();
        return redirect('/manage-product')->with('message', 'Product Add Successfully');
    }

    public function deleteProduct(Request $request){
        $product = Product::find($request->product_id);
        $product->delete();
        return back()->with('message', 'Delete Success');
    }
}
