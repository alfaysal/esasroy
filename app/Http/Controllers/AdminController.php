<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Notifications\BusinessAdminRequestNotification;
use Illuminate\Http\Request;
use Mail;
use App\Mail\ConfirmationAccount;
use App\BusinessAdminRequest;
use App\Admin;
use Hash;
use DB;


class AdminController extends Controller
{
    public function AdminRequestSave(Request $request){

    	$b_s_a_request = new BusinessAdminRequest();

    	$b_s_a_request->name = $request->name;
    	$b_s_a_request->email = $request->email;
    	$b_s_a_request->home = $request->home;
    	$b_s_a_request->phone = $request->phone;
    	$b_s_a_request->licence = $request->licence;
    	$b_s_a_request->shope_name = $request->shope_name;
    	$b_s_a_request->number_of_shop = $request->number_of_shop;
        $b_s_a_request->business_type = $request->business_type;
    	$b_s_a_request->national_id = $request->national_id;
    	$b_s_a_request->business_address = $request->business_address;
    	$b_s_a_request->d_o_b = $request->d_o_b;

    	//$faysal->notify(new BusinessAdminRequestNotification($b_s_a_request->name));
    	$b_s_a_request->save();

    	return redirect()->back();
    }


    public function AdminRequestShow(){

    	$b_s_a_requests = DB::table('business_admin_requests')
    						->orderBy('id','DESC')
    						->get();

    	return view('back-end.admin.business_super_admin.view_request',[
    			'b_s_a_requests' => $b_s_a_requests
    	]);
    }

    public function accountActivatePage($id){

        $b_s_a_req_details = BusinessAdminRequest::find($id);


        return view('back-end.admin.business_super_admin.request_accepted',[
                'b_s_a_req_details' =>  $b_s_a_req_details
        ]);

    }

    public function accountActivateSave(Request $request){

        $b_a_ac_active_detail = BusinessAdminRequest::where('id',$request->id)->first();

        $password = $this->createPassword();

        $b_a_ac_active = new Admin();

        $b_a_ac_active->business_admin_request_id = $request->id;
        $b_a_ac_active->name = $b_a_ac_active_detail->name;
        $b_a_ac_active->email = $b_a_ac_active_detail->email;
        $b_a_ac_active->password = Hash::make($password);
        $b_a_ac_active->home = $b_a_ac_active_detail->home;
        $b_a_ac_active->phone = $b_a_ac_active_detail->phone;
        $b_a_ac_active->licence = $b_a_ac_active_detail->licence;
        $b_a_ac_active->shope_name = $b_a_ac_active_detail->shope_name;
        $b_a_ac_active->number_of_shop = $b_a_ac_active_detail->number_of_shop;
        $b_a_ac_active->business_type = $b_a_ac_active_detail->business_type;
        $b_a_ac_active->national_id = $b_a_ac_active_detail->national_id;
        $b_a_ac_active->business_address = $b_a_ac_active_detail->business_address;
        $b_a_ac_active->d_o_b = $b_a_ac_active_detail->d_o_b;
        $b_a_ac_active->activation_status = $request->activation_status;


        $b_a_ac_active->save();

        $this->sendMailRole($b_a_ac_active,$password);

        $b_a_ac_active_detail->activation_status = 1;
        $b_a_ac_active_detail->save();


        return redirect()->back();


    }

    protected function createPassword(){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $pin =mt_rand(1000000, 9999999) . $characters[rand(0, strlen($characters) - 1)];

        $password = str_shuffle($pin);

        return $password;
    }

    protected function sendMailRole($b_a_ac_active,$password){
         Mail::to($b_a_ac_active->email)->send(new ConfirmationAccount($password));
         $b_a_ac_active->assignRole('business super admin');
    }


}
