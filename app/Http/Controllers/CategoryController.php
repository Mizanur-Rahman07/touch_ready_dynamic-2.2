<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory() {
        return view('admin.categories.add_category');
    }

    public function saveCategory(Request $request) {
        $category = new Category();
        $category->category_title = $request->category_title;
        $category->category_image = $this->saveCategoryImage($request);
        $category->slug = $this->makeSlug($request);
        $category->category_discount = $request->category_discount;
        $category->save();
        return redirect('/manage-category')->with('message','Category Insert Successfully');
    }

    private function saveCategoryImage($request){
        $image = $request->file('category_image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/categoryImage/';
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
        $str = $request->product_name;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function categoryStatus($id)
    {
        $category = Category::find($id);
        if ($category->status == 1) {
            $category->status = 0;
            $category->save();
            return back();
        } else {
            $category->status = 1;
            $category->save();
            return back();
        }
    }

    public function manageCategory() {
        return view('admin.categories.manage_category',[
            'categories' =>Category::all()
        ]);
    }

    public function editCategory($id) {
        return view('admin.categories.edit_category',[
            'categories' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request) {
        $category = Category::find($request->category_id);
        $category->category_title = $request->category_title;
        if ($request->file('category_image')) {
            if ($category->category_image) {
                unlink($category->category_image);
            }
            $category->category_image = $this->saveCategoryImage($request);
        }
        $category->slug = $this->makeSlug($request);
        $category->category_discount = $request->category_discount;
        $category->save();
        return redirect('/manage-category')->with('message', 'Category Update Successfully');
    }


    public function deleteCategory(Request $request)
    {
        $category = Category::find($request->category_id);
        if ($category->category_image) {
            unlink($category->category_image);
        }
        $category->delete();
        return back()->with('message', 'Delete success');
    }
}
