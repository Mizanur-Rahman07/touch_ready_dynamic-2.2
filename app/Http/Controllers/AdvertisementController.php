<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function addAdvertisement(){
        return view('admin.advertisements.add_advertisement');
    }

    public function saveAdvertisement(Request $request){
        $advertise = new Advertisement();
        $advertise->advertisement_title = $request->advertisement_title;
        $advertise->advertisement_image = $this->saveAdvertiseImage($request);
        $advertise->slug = $this->makeSlug($request);
        $advertise->save();
        return redirect('/manage-advertisement')->with('message','Advertise Insert Successfully');
    }

    private function saveAdvertiseImage($request){
        $image = $request->file('advertisement_image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/AdvertiseImage/';
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

    public function advertiseStatus($id)
    {
        $advertise = Advertisement::find($id);
        if ($advertise->status == 1) {
            $advertise->status = 0;
            $advertise->save();
            return back();
        } else {
            $advertise->status = 1;
            $advertise->save();
            return back();
        }
    }

    public function manageAdvertisement() {
        return view('admin.advertisements.manage_advertisement',[
            'advertisement' =>Advertisement::all()
        ]);
    }

    public function editAdvertisement($id) {
        return view('admin.advertisements.edit_advertisement',[
            'advertisement' => Advertisement::find($id)
        ]);
    }  

    public function updateAdvertisement(Request $request) {
        $advertise = Advertisement::find($request->advertise_id);
        $advertise->advertisement_title = $request->advertisement_title;
        if ($request->file('advertisement_image')) {
            if ($advertise->advertisement_image) {
                unlink($advertise->advertisement_image);
            }
            $advertise->advertisement_image = $this->saveAdvertiseImage($request);
        }
        $advertise->slug = $this->makeSlug($request);
        $advertise->save();
        return redirect('/manage-advertisement')->with('message', 'Advertise Update Successfully');
    }


    public function deleteAdvertisement(Request $request)
    {
        $advertise = Advertisement::find($request->advertise_id);
        if ($advertise->advertisement_image) {
            unlink($advertise->advertisement_image);
        }
        $advertise->delete();
        return back()->with('message', 'Delete success');
    }




}
