<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;
use App\AdminLoginModel;


class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('backend.login');
    }

    /**
     * Handle an authentication attempt for admin user.
     *
     */
    public function userAuthentication(Request $request)
    {
echo 'die';die;
        if (Auth::attempt(array('username' => $request->username, 'password' => $request->password))){
            return "success";
        }else{
            return "Wrong Credentials";
        }
        die;
    }
}