<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;



class AccountModel extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='users';

    static public function getAccount(){
        /*$return=programemodel::select('programe_masters.*')
        ->join('users','users.id','programe_masters.in_charge')
        ->orderby('programe_masters.id','desc');
        //echo $return;die;
        return $return;*/
        $id=Auth::user()->id;
        $users = DB::table('users')->where('users.id',Auth::user()->id)->select('users.*','programe_masters.name as progragename')
            ->leftJoin('programe_masters', 'programe_masters.in_charge', '=', 'users.id')
            ->get();
            //echo $users;die;
        return $users;
    }
    static public function getSingle($id){
        return self::find($id);
    }
}
