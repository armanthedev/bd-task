<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
   public function index(){
            $data['appsetting'] = DB::table('appsetting_tb')
            ->select('copyright_text')
            ->first();
       return view('Admin/neworder',$data);
   }
   public function manage(){
    $data['appsetting'] = DB::table('appsetting_tb')
    ->select('copyright_text')
    ->first(); 

       return view('Admin/manageorder',$data);
   }
  
   public function ordertable(){
    $data['appsetting'] = DB::table('appsetting_tb')
    ->select('copyright_text')
    ->first();

    return view('Admin/ordertable',$data);
    }
   public function updateorder(){
    $data['appsetting'] = DB::table('appsetting_tb')
    ->select('copyright_text')
    ->first();
        return view('Admin/updateorder',$data);

    }
}