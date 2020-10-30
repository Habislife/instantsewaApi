<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiceUserUpdate extends Controller
{
    public function updateFullName(Request $request)
    {
    	$rules = [
            'fullname' => 'required|string|max:255',
            'id' =>'required',
        ];
        $this->validate($request, $rules);
        DB::table('users')->where('id',$request['id'])->update(['fullname'=>$request['fullname']]);
    }

    public function updateAddress(Request $request)
    {
    	$rules = [
            'address' => 'required|string|max:255',
            'id' =>'required',
        ];
        $this->validate($request, $rules);
        DB::table('users')->where('id',$request['id'])->update(['address'=>$request['address']]);
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
