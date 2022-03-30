<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        
        $data['sociallink'] = DB::table('social_tb')
        ->select('*')
        ->first();

        $data['appsetting'] = DB::table('appsetting_tb')
        ->select('*')
        ->first();

        $data['department'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->get();

        return view('ecommerce/shopgrid',$data);
    }  
    public function shopingCart(Request $request){

        // $data['banner'] = DB::table('banner_tb')
        //         ->select('*')
        //         ->first();

                
        $data['sociallink'] = DB::table('social_tb')
        ->select('*')
        ->first();

        $data['appsetting'] = DB::table('appsetting_tb')
        ->select('*')
        ->first();

        $data['department'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->get();
        $data['cart'] = $request->session()->get('cart');
        /*echo "<pre>";
        print_r($data['cart']);
        die();*/

        return view('ecommerce/shopingcart',$data);
    }
    
}
