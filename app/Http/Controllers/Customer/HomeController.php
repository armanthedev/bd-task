<?php

namespace App\Http\Controllers\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

                $data['banner'] = DB::table('banner_tb')
                ->select('*')
                ->first();

                $data['sociallink'] = DB::table('social_tb')
                            ->select('*')
                            ->first();

                $data['appsetting'] = DB::table('appsetting_tb')
                ->select('*')
                ->first();

                $data['category'] = DB::table('category_tb')
                ->select('category_tb.*')
                ->where('category','=',0)
                ->where('status','!=',0)                          
                ->get();

                $data['department'] = DB::table('category_tb')
                                    ->select('category_tb.*')
                                    ->get();

                                   
                $data['product'] = DB::table('product_tb')
                                    ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                                    ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                                    ->get();
               /* echo "<pre>";
                print_r($data['product']);
                die();*/
                /*$data['product'] = DB::table('product_tb')
                ->select('product_tb.*','category_tb.c_name as c_name')
                ->join('category_tb','category_tb.id','=','product_tb.p_category')           
                ->get();*/

                $data['poster'] = DB::table('poster_tb')
                                ->select('poster_tb.*')
                                ->first();
                            
        return view('ecommerce/home',$data);
    }

    public function privacyPolicy(){
        $data['privacy'] = DB::table('privacy_tb')
                            ->select('*')
                            ->first();
        $data['department'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->get();
        return view('ecommerce/privacypolicy',$data);
    }
    public function deliveryInformation(){

        return view('ecommerce/delivery');
    }
    public function addDelivery(Request $request){
        $validated = $request->validate([
            'user'              => 'required|max:255',
            'payment'           => 'required|max:150',
            'comment'           => 'required|max:500',
            'date'              => 'required',
            'amount'            => 'required|numeric',
            'fees'              => 'required|numeric'
        ]);
        
     
        
        $data = array(
            'u_name'            => $request->input('user'),
            'pay_method' =>  $request->input('payment'),
            'Comments'  => $request->input('comment'),
            'Date'        => $request->input('date'),
            'Amount'        => $request->input('amount'),
            'Fees'           => $request->input('fees')
        );
       $insert = DB::table('deliveryinfo_tb')->insert($data);
       if($insert){
            return redirect('deliverinfo')->with('status', 'Successfully Added');
       }else{
            return redirect('deliverinfo')->with('error', 'Something Went Wrong');
       }
        // $input = $request -> all();
        // echo '<pre>'; 
        // print_r($input);
        // die();
       
        // print_r(request->all());
        // die();
    }
    //===================================================================//
    public function addSubscriber(Request $request){
        $validated = $request->validate([
            'email'              => 'required|unique:subscribe_tb|max:30',
        ]);
        
        $data = array(
            'email'            => $request->input('email')

        );
       $insert = DB::table('subscribe_tb')->insert($data);
       if($insert){
            return redirect('/')->with('status', 'you subscribe here');
       }else{
            return redirect('/')->with('error', 'Something Went Wrong');
       }
        
    }

    
}
