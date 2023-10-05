<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
   
    public function registr(){
    return view('registration');
    }
    public function Saveregister(Request $request): JsonResponse
    {
        $request->validate([
            'password' => 'min:8|required_with:cnfpassword|same:cnfpassword',
            'cnfpassword'=> 'min:8',
        ]);
         
        user::create([
            'name' => $request->fname,
            'email' => $request->email,
            'password' => $request->password,
            'username' => $request->username,
            'department' => $request->department,
            'state' => $request->state,
            'Zip' => $request->Zip,
            'country' => $request->country,
            'course' => $request->course,
            'dob' => $request->dob,
            'sex' => $request->sex,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role,
            'remember_token' => $request->chb,

            
        ]);
    
        return response()->json(['success' => 'Post created successfully.']);
        //return view('login');
    
    }
    
    public function Userloginpath(){
        
        return view('login');
    }
    
   public function ImageUpload(){
    
   }
}
