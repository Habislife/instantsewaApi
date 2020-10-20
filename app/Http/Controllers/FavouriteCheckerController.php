<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteCheckerController extends Controller
{
public function isAvailable(Request $request)
    {
         $rules = [
            'service_user_id' => 'required',
            'service_provider_id' => 'required',
        ];

        $this->validate($request, $rules);
        if (Favourite::where('service_user_id', '=',$request['service_user_id'],'AND','service_provider_id', '=',$request['service_provider_id'])->exists()) {
        	return response(
            ['data' => 'true'],200);
        }
        else {
        	return response(
            ['data' => 'false'],200);;
        }

   
    }

    
}
