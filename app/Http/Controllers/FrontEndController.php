<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
  public function index() {
    return view('frontEnd.home.home',[
      'pro_categories' => Category::where('status', 1)->orderBy('id', 'desc')->take(6)->get(),
      'hot_dis_pro' => Product::where('product_type', 1)->where('status', 1)->orderBy('id', 'desc')->take(5)->get(),
      'authors' => Author::where('status', 1)->orderBy('id', 'desc')->take(2)->get(),
      'islamik_books' => Product::where('product_type', 2)->where('status', 1)->orderBy('id', 'desc')->take(5)->get(),
      'kidzs_islamik_books' => Product::where('product_type', 3)->where('status', 1)->orderBy('id', 'desc')->take(5)->get(),

    ]);
  }

  public function islamikBook() {
    return view('frontEnd.book.islamik_book',[
      'authors' => Author::where('status', 1)->orderBy('id', 'desc')->get(),
      'islamik_books' => Product::where('product_type', 2)->where('status', 1)->orderBy('id', 'desc')->get(),

    ]);
  }
  public function kidsBook() {
    return view('frontEnd.book.kids_book',[
      'authors' => Author::where('status', 1)->orderBy('id', 'desc')->get(),
      'kidzs_islamik_books' => Product::where('product_type', 2)->where('status', 1)->orderBy('id', 'desc')->get(),
    ]);
  }
  public function kidsZone() {
    return view('frontEnd.kids_zone.kids_zone');
  }
  public function kasmeriShal() {
    return view('frontEnd.fassion.kasmeri_shal');
  }
  public function authors() {
    return view('frontEnd.authors.author');
  }
  public function userLogin() {
    return view('frontEnd.users.user_login');
  }
  public function userRegistration() {
    return view('frontEnd.users.user_registration');
  }
}
