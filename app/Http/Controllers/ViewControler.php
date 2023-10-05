<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

class ViewControler extends Controller
{
    public function getuser(): JsonResponse
    {
        //echo "sand";
        $users = DB::table('users')->where('role', '0')->select(array('id' , 'name'))->get();
        //echo '<pre>'; print_r($users);die;
        
        /*foreach ($users as $key => $value) {
            //echo $users[$key]->name;
            $u_name=$users[$key]->name;
            $u_id=$users[$key]->id;
            $arr=array("u_id" => $u_id,"u_name" => $u_name);
            
        }*/
        return response()->json($users);
        //echo $u_name;
        
    }
    public function getprograme():JsonResponse
    {
        //echo "sand";
        $programe = DB::table('programe_masters')->select(array('id' , 'name'))->get();
        //echo '<pre>'; print_r($users);die;
        
        /*foreach ($users as $key => $value) {
            //echo $users[$key]->name;
            $u_name=$users[$key]->name;
            $u_id=$users[$key]->id;
            $arr=array("u_id" => $u_id,"u_name" => $u_name);
            
        }*/
        return response()->json($programe);
        //echo $u_name;
        
    }
}
