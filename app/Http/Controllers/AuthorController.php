<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(){
        return view('admin.author.add_author');
    }

    public function saveAuthor(Request $request){
        $author = new Author();
        $author->author_name = $request->author_name;
        $author->author_image =$this->saveAuthorImage($request);
        $author->slug = $this->makeSlug($request);
        $author->author_discount = $request->author_discount;
        $author->save();
        return redirect('/manage-author')->with('message', 'Author Insert Successfully');
    }

    private function saveAuthorImage($request){
        $image = $request->file('author_image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/authorImage/';
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

    public function authorStatus($id)
    {
        $author = Author::find($id);
        if ($author->status == 1) {
            $author->status = 0;
            $author->save();
            return back();
        } else {
            $author->status = 1;
            $author->save();
            return back();
        }
    }

    public function manageAuthor() {
        return view('admin.author.manage_author',[
            'authors' =>Author::all()
        ]);
    }

    public function editAuthor($id) {
        return view('admin.author.edit_author',[
            'authors' => Author::find($id)
        ]);
    }

    public function updateAuthor(Request $request) {
        $author = Author::find($request->author_id);
        $author->author_name = $request->author_name;
        if ($request->file('author_image')) {
            if ($author->author_image) {
                unlink($author->author_image);
            }
            $author->author_image = $this->saveAuthorImage($request);
        }
        $author->slug = $this->makeSlug($request);
        $author->author_discount = $request->author_discount;
        $author->save();
        return redirect('/manage-author')->with('message', 'Author Update Successfully');
    }


    public function deleteAuthor(Request $request)
    {
        $author = Author::find($request->author_id);
        if ($author->author_image) {
            unlink($author->author_image);
        }
        $author->delete();
        return back()->with('message', 'Delete success');
    }
}
