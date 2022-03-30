<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CmsController extends Controller
{


    public function addBanner(){
        $data['editbanner'] = DB::table('banner_tb')
                            ->select('*')
                            ->first();
                            $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('copyright_text')
                            ->first();
        return view('Admin/addbanner',$data);
    }

    public function updateBanner(Request $request){
        $validated = $request->validate([
            'b_name'            => 'required|max:255',
            'description'        => 'required|max:1000',
            'image'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
          
        ]);
    
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }
        
        
        $data = array(
            'b_name'            => $request->input('b_name'),
            'description'       =>  $request->input('description'),
            'image'             => $image_name
        );
       $update = DB::table('banner_tb')-> update($data);
       if( $update){
            return redirect('addbanner')->with('status', 'Successfully Added');
       }else{
            return redirect('addbanner')->with('error', 'Something Went Wrong');
       }
       
    }
    //===========================================================================================//

    public function contactUs(){

        $data['editcontact'] = DB::table('contact_tb')
                            ->select('*')
                            ->first();
                           
                            $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('copyright_text')
                            ->first();
        return view('Admin/contactus', $data);
    }

    public function updateContact(Request $request){
        $validated = $request->validate([
            'Heading'      => 'required|max:255',
            'phone'        => 'required|max:255',
            'email'        => 'required|max:20|email:rfc,dns',
            'address'        => 'required|max:255',
            'opentime'        => 'required|max:255',
        ]);
        
        
        $data = array(
            'Heading'      => $request->input('Heading'),
            'phone'        => $request->input('phone'),
            'email'        => $request->input('email'),
            'address'      => $request->input('address'),
            'opentime'     => $request->input('opentime'),
        );
       $update = DB::table('contact_tb')-> update($data);
       if( $update){
            return redirect('contactus')->with('status', 'Successfully Added');
       }else{
            return redirect('contactus')->with('error', 'Something Went Wrong');
       }
        
    }

    //============================================================================================//
    public function deliveryInfo(){

        $data['deliveryinfo']  = DB::table('deliveryinfo_tb')
                             ->select('*')
                             ->get();
        $data['appsetting'] = DB::table('appsetting_tb')
                             ->select('*')
                             ->first();

        return view('Admin/deliveryinfo',  $data);
    }

    public function editeDelivery($id=null){
        $data['editdelivery']  = DB::table('deliveryinfo_tb')
                                ->select('*')
                                ->where('deliveryinfo_tb.id',$id)
                                ->first();
                                $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();
     
        return view('Admin/editedelivery',$data);
    }

    public function updateDelivery($id=null, Request $request){
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
       $update = DB::table('deliveryinfo_tb')->where('id',$id)->update($data);
       if($update){
            return redirect('editedelivery/'.$id)->with('status', 'Successfully Added');
       }else{
            return redirect('editedelivery/'.$id)->with('error', 'Something Went Wrong');
       }
       
    }
    //=============================================================================================//
    public function socialLink(){
        $data['sociallink'] = DB::table('social_tb')
                            ->select('*')
                            ->first();
                            $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('copyright_text')
                            ->first();
        
        return view('Admin/sociallink',$data);
    }

    public function updateSociallink(Request $request)
        {
            $validated = $request->validate([
                'facebook'     => 'required|url',
                'twitter'      => 'required|url',
                'linkedin'     => 'required|url',
                'instagram'     => 'required|url',
                'pinterest'    => 'required|url',
            ]);
        
            
            $data = array(
                'facebook'          =>  $request->input('facebook'),
                'twitter'           =>  $request->input('twitter'),
                'linkedin'          =>  $request->input('linkedin'),
                'instagram'          =>  $request->input('instagram'),
                'pinterest'         =>  $request->input('pinterest'),
            );

            

            $update = DB::table('social_tb')->update($data);
            if($update){
                return redirect('sociallink')->with('status','successfully added');
            }else{
                return redirect('sociallink')->with('status', 'something went wrong');
            }
        }

    //============================================================================================//
        public function addPoster(){
            $data['appsetting'] = DB::table('appsetting_tb')
            ->select('copyright_text')
            ->first();
            $data['poster'] = DB::table('poster_tb')
            ->select('poster_tb.*')
            ->first();

            return view('Admin/addposter',$data);
        }


    public function updatePoster(Request $request){
        $validated = $request->validate([
            'image_one'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image_two'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        if($request->file('image_one')){
            if($request->file('image_two')){
                $image_one = time().$request->file('image_one')->getClientOriginalName();
                $image_two = time().$request->file('image_two')->getClientOriginalName();
                $path = $request->file('image_one')->storeAs('public/product-image',$image_one);
                $path = $request->file('image_two')->storeAs('public/product-image',$image_two);
            }
            
        }else{
            $image_one = $request->input('old_image_one');
            $image_two = $request->input('old_image_two');
        }
        
        $data = array(
            'image_one'      => $image_one,
            'image_two'        => $image_two
        );
       $insert = DB::table('poster_tb')-> update($data);
       if( $insert){
            return redirect('addposter')->with('status', 'Successfully Added');
       }else{
            return redirect('addposter')->with('error', 'Something Went Wrong');
       }
        
    }

    //===========================================================================//

    public function privacy(){

        $data['privacy'] = DB::table('privacy_tb')
                            ->select('*')
                            ->first();

                            $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('copyright_text')
                            ->first();
        return view('Admin/privacy',$data);
    }

    public function updatePrivacy(Request $request){
        $validated = $request->validate([
            'privacy_heading'    => 'required|max:255',
            'privacy_des'        => 'required|max:3000',
          
        ]);  
        
        $data = array(
            'privacy_heading'  => $request->input('privacy_heading'),
            'privacy_des'       =>  $request->input('privacy_des'),
        );
       $update = DB::table('privacy_tb')-> update($data);
       if( $update){
            return redirect('privacy')->with('status', 'Successfully Added');
       }else{
            return redirect('privacy')->with('error', 'Something Went Wrong');
       }
        // $input = $request -> all();
        // echo '<pre>'; 
        // print_r($input);
        // die();
       
        // print_r(request->all());
        // die();
    }
    //=============================================================================================//


    
}
