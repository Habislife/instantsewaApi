<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class ServiceUserUpdate extends Controller
{
    public function updateFullName(Request $request)
    {
    	$rules = [
            'fullname' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'id' =>'required',
        ];
        $this->validate($request, $rules);
        DB::table('users')->where('id',$request['id'])->update(['fullname'=>$request['fullname'],'gender'=>$request['gender'],]);
    }

    public function updateAddress(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'service_user_id' => 'required',
            'address_address' => 'required|string|max:255',
            'address_latitude' => 'required',
            'address_longitude' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['errors'=>$validator->errors()],422);
        }
        $address = new Address();
       $address->address_address = $request->address_address;
      $address->address_latitude = $request->address_latitude;
     $address->address_longitude =$request->address_longitude;
    $address->save();
        DB::table('users')->where('id',$request['service_user_id'])->update(['address_id'=>$address->id]);
    }

        public function updatePhoneNo(Request $request)
    {
    	$rules = [
            'phoneno' => 'required|string|max:255',
            'id' =>'required',
        ];
        $this->validate($request, $rules);
        DB::table('users')->where('id',$request['id'])->update(['phoneno'=>$request['phoneno']]);
    }
}
