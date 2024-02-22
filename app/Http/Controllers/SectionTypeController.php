<?php

namespace App\Http\Controllers;

use App\Models\SectionType;
use Illuminate\Http\Request;

class SectionTypeController extends Controller
{
//    public function manageSectionType() {
//     return view("admin.sectionType.sectiontype");
//    }

   public function saveSectionType(Request $request)
   {
       $secType = new SectionType();
       $secType->section_title = $request->section_title;
       $secType->section_sub_title = $request->section_sub_title;
       $secType->save();
       return redirect('/manage-section-type')->with('message', 'Section Type Add Successfully');
   }

   public function sectionTypeStatus($id)
   {
       $secType = SectionType::find($id);
       if ($secType->status == 1) {
           $secType->status = 0;
           $secType->save();
           return back();
       } else {
           $secType->status = 1;
           $secType->save();
           return back();
       }
   }
   public function manageSectionType() {
    return view('admin.sectionType.sectiontype',[
        'sectionType' =>SectionType::all()
    ]);
}

public function editSectionType($id) {
    return view('admin.sectionType.edit_section_type',[
        'secTypes' => SectionType::find($id)
    ]);
} 

public function updateSectionType(Request $request) {
    $secType = SectionType::find($request->secType_id);
    $secType->section_title = $request->section_title;
    $secType->section_sub_title = $request->section_sub_title;
    $secType->save();
    return redirect('/manage-section-type')->with('message', 'Section Type Update Successfully');
}


public function deleteSectionType(Request $request)
{
    $secType = SectionType::find($request->secType_id);
    $secType->delete();
    return back()->with('message', 'Delete success');
}
}
