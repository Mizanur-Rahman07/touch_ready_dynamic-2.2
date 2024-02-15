<?php

namespace App\Http\Controllers;

use App\Models\OurTalk;
use Illuminate\Http\Request;

class OurTalkController extends Controller
{
   public function addOurtalk(){
    return view('admin.our_talk.add_ourTalk');
   }

   public function saveOurtalk(Request $request){
    $ourTalk = new OurTalk();
    $ourTalk->our_talk_video = $request->our_talk_video;
    $ourTalk->our_talk_content = $request->our_talk_content;
    $ourTalk->slug = $this->makeSlug($request);
    $ourTalk->save();
    return redirect('/manage-ourtalk')->with('message','Our Talk Insert Successfully');
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

public function ourtalkStatus($id)
{
    $ourTalk = OurTalk::find($id);
    if ($ourTalk->status == 1) {
        $ourTalk->status = 0;
        $ourTalk->save();
        return back();
    } else {
        $ourTalk->status = 1;
        $ourTalk->save();
        return back();
    }
}

public function manageOurtalk() {
    return view('admin.our_talk.manage_our_talk',[
        'ourTalks' =>OurTalk::all()
    ]);
}

public function editOurtalk($id) {
    return view('admin.our_talk.edit_our_talk',[
        'ourTalks' => OurTalk::find($id)
    ]);
}  

public function updateOurtalk(Request $request) {
    $ourTalk = OurTalk::find($request->ourTalk_id);
    $ourTalk->our_talk_video = $request->our_talk_video;
    $ourTalk->our_talk_content = $request->our_talk_content;
    $ourTalk->slug = $this->makeSlug($request);
    $ourTalk->save();
    return redirect('/manage-ourtalk')->with('message', 'ourTalk Update Successfully');
}


public function deleteOurtalk(Request $request)
{
    $ourTalk = OurTalk::find($request->ourTalk_id);
    $ourTalk->delete();
    return back()->with('message', 'Delete success');
}

}
