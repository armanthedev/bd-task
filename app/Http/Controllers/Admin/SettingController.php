<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function appSetting(){

        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();

        return view('Admin/appsetting',$data);
    }

    public function updateAppsetting(Request $request){
        $validated = $request->validate([
            'apptitle'      => 'max:255',
            'offer'         => 'max:255',
            'address'       => 'max:255',
            'email'         => 'max:30',
            'phone'         => 'max:40',
            'favicon'       => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'sitelogo'      => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'admin_align'   => '',
            'office_time'   => 'max:255',
            'latitude'      => 'max:255',
            'copyright_text'=> 'max:500',
        ]);

        if($request->file('favicon')){
            if($request->file('sitelogo')){
                $image_name = time().$request->file('favicon')->getClientOriginalName();
                $image_name1 = time().$request->file('sitelogo')->getClientOriginalName();
                $path = $request->file('favicon')->storeAs('public/product-image',$image_name);
                $path = $request->file('sitelogo')->storeAs('public/product-image',$image_name1);
            }
            
        }else{
            $image_name = $request->input('old_image_one');
            $image_name1 = $request->input('old_image_two');
        }
            

            $data = array(
                'title'         => $request->input('apptitle'),
                'offer'         => $request->input('offer'),
                'address'       => $request->input('address'),
                'email'         => $request->input('email'),
                'phone'         => $request->input('phone'), 
                'fav_img'       => $image_name, 
                'site_logo'     => $image_name1,
                'admin_align'   => $request->input('admin_align'), 
                'office_time'   => $request->input('office_time'),
                'copyright_text'=> $request->input('copyright_text'),
            );

            $update = DB::table('appsetting_tb')->update($data);

            if($update){
                return redirect('appsetting')->with('status','successfully updated');
            }else{
                return redirect('appsetting')->with('error', 'something went wrong');
            }
        
    }


//=====================================================================================//
    public function smsSetting(){
        $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();

        return view('Admin/smssetting',$data);
    }

    // public function postSms(Request $request){
    //     Nexmo::message()->send([
    //         'to'   => '01612975172',
    //         'from' => $request->input('phone'),
    //         'text' => $request->input('message')
    //     ]);

    //     echo "sms sent successfully";
        
    // }

    public function emailSetting(){
        $data['appsetting'] = DB::table('appsetting_tb')
                                ->select('copyright_text')
                                ->first();
        return view('Admin/emailsetting',$data);
    }
    
}
