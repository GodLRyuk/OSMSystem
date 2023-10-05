<?php

namespace App\Http\Controllers;
use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class AccountControler extends Controller
{
    public function control_account(){
        $getaccount = AccountModel::getAccount();
        return view('AdminPanel.settings_account')->with('getaccount',$getaccount);;
    }

    public function account_edit($id, Request $request): JsonResponse
    {
        
        $save=AccountModel::getSingle($id);  
        $request->user()->update([
            'name' => $request->firstName,
            'email' => $request->email,
            'department' => $request->department,
            'state' => $request->state,
            'Zip' => $request->Zip,
            'country' => $request->country,
            'course' => $request->course,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        //echo $request;die;
        return response()->json(['success' => 'Record Updated successfully.']);
    }
    public function profile_pic_edit($id, Request $request): JsonResponse
    {
        $save=AccountModel::getSingle($id);
      //  echo $request->image;die;
         //$folder_path=public_path('upload_profile/')
         $folderPath = public_path('upload_profile/'); //create folder upload public/upload
   
         $image_parts = explode(";base64,", $request->image);
         $image_type_aux = explode("image/", $image_parts[0]);
         $image_type = $image_type_aux[1];
         $image_base64 = base64_decode($image_parts[1]);
   
         $imageName = uniqid() . '.png';
   
         $imageFullPath = $folderPath.$imageName;
   
         file_put_contents($imageFullPath, $image_base64);
   
          //$saveFile = new Image;
          $save->photo = $imageName;
          $save->save();
          return response()->json(['success' => 'Image Uploded successfully.']);
    }
}
