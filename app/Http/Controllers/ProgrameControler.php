<?php

namespace App\Http\Controllers;
use App\Models\programemodel;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProgrameControler extends Controller
{
    public function programepath(){
        //$data['header_title']="Programe List";
        $getPrograme = programemodel::getPrograme();
        return view('AdminPanel.programe_masters')->with('getPrograme',$getPrograme);
    }

    public function Saveprograme(Request $request): JsonResponse
    {
        programemodel::create([
            'name' => $request->programe_name,
            'in_charge' => $request->in_charge,
            'status' => $request->status,
            
        ]);
    
        return response()->json(['success' => 'Record Added successfully.']);
    }

    public function Editprograme($id){
        echo "san";
    }
}
