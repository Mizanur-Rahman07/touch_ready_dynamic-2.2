<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('frontend.users.user_registration');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store ()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
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
        return redirect('/manage_user')->with('message', 'Insert Success');
    }

    private function saveImage($request){
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'frontEndAsset/Image/UserImage/';
        $imgUrl = $directory . $imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }

    public function userStatus($id)
    {
        $user = Customer::find($id);
        if ($user->status == 1) {
            $user->status = 0;
            $user->save();
            return back();
        } else {
            $user->status = 1;
            $user->save();
            return back();
        }
    }

    public function show()
    {
        return view('admin.users.manage_user',[
            'users' =>Customer::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUser(string $id)
    {
        return view('admin.users.edit_user',[
            'users' => Customer::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(Request $request)
    {
        $user = Customer::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        if ($request->file('image')) {
            if ($user->image) {
                unlink($user->image);
            }
            $user->image = $this->saveImage($request);
        }
        $user->save();
        return redirect('/manage_user')->with('message', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteUser(Request $request)
    {
        $user = Customer::find($request->user_id);
        if ($user->image) {
            unlink($user->image);
        }
        $user->delete();
        return back()->with('message', 'Delete success');
    }
}
