<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class programemodel extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='programe_masters';

    static public function getPrograme(){
        /*$return=programemodel::select('programe_masters.*')
        ->join('users','users.id','programe_masters.in_charge')
        ->orderby('programe_masters.id','desc');
        //echo $return;die;
        return $return;*/
        $users = DB::table('programe_masters')->select('programe_masters.*','users.name as in_charge','users.id as user_id')
            ->leftJoin('users', 'users.id', '=', 'programe_masters.in_charge')
            ->get();
            //echo $users;die;
        return $users;
    }
}
