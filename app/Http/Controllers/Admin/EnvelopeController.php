<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnvelopeController extends Controller
{
    public function subscriber(){

        $data['subscriber'] = DB::table('subscribe_tb')
                                ->select('*')
                                ->get();
        $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();

        return view('Admin/subscriber',$data);
    }
    public function messages(){
        $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();
        $data['messages'] = DB::table('messages_tb')
                          ->select('*')
                          ->get();

        return view('Admin/messages',$data);
    }
}
