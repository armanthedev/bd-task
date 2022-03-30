<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contact(){
        $data['contact'] = DB::table('contact_tb')
        ->select('*')
        ->first();
        
        $data['sociallink'] = DB::table('social_tb')
        ->select('*')
        ->first();

        $data['appsetting'] = DB::table('appsetting_tb')
        ->select('*')
        ->first();

        $data['department'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->get();

        return view('ecommerce/contact', $data);
    }
    public function addMessages(Request $request){
        $validated = $request->validate([
            'name'               =>'required |max:30',
            'email'              =>'required |max:40',
            'messages'           =>'max:255'
        ]);
        
        $data = array(
            'name'            => $request->input('name'),
            'email'            => $request->input('email'),
            'messages'            => $request->input('messages')

        );
       $insert = DB::table('messages_tb')->insert($data);
       if($insert){
            return redirect('contact')->with('status', 'Successfully messages');
       }else{
            return redirect('contact')->with('error', 'Something Went Wrong');
       }
        
    }
}