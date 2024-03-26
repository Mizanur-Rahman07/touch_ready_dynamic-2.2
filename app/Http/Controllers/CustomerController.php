<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

      public function userRegistration() {
        return view('frontEnd.users.user_registration');
      }
    /**
     * Show the form for creating a new resource.
     */
    public function saveUser(Request $request)
    {
        // return $request;
        $user = new Customer();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->image = $this->saveImage($request);
        $user->save();
        return redirect('/')->with('message', 'Insert Success');
    }

    private function saveImage($request){
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'frontEndAsset/Image/UserImage/';
        $imgUrl = $directory . $imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }


    public function userLogin() {
        return view('frontEnd.users.user_login');
      }

    public function userLoginCheck(Request $request)
    {

        // return $request;
        $loginInfo = Customer::where('email', $request->email)
            ->orWhere('phone', $request->email)
            ->first();

        //  return $loginInfo;
        if ($loginInfo) {
            $expassword = $loginInfo->password;
            // return $expassword;
            // if (Hash::check( ($request->password),($loginInfo->password))) {
            // return '$Hash';

            if (password_verify($request->password, $expassword)) {
                Session::put('userId',  $loginInfo->id);
                Session::put('userName',  $loginInfo->name);
                return redirect('/');
            } else {
                return back()->with('message', 'Use Valid password');
            }
        } else {
            return back()->with('message', 'Use Valid Email or phone');
        }
    }
    
    public function userLogout()
    {
        Session::forget('userId');
        Session::forget('userName');
        return  redirect('/');
    }


}
