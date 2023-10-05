<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;


class UserAuthentication extends Controller
{
    public function UserAuthenticate(Request $request)
    {
        $userdetails=[
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        if (Auth::attempt(['username' => $request ['username'], 'password' => $request ['password']]) ) {
            $role = Auth::user()->role;
            $request->session()->regenerate();
           // return response()->json(['id' => $role]);
           /* switch($role){
                case '0': return redirect()->route('teacher_dashboard');
                break;
                case '1': return redirect()->route('admin.student_dashboard');
                break;
                
            }*/
            return response()->json(['role' => $role]);
        }else{
            //return response()->json(['Error' => 'Wrong Credentials']);
            return "Wrong Credentials";
        }
    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
