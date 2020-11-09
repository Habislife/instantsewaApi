<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceProviderCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceProviderSelectionController extends Controller
{
    public function selectionList(Request $request)
    {
    	$rules = [
            'service_id' =>'required',
        ];
        $this->validate($request, $rules);
        $service_providers_id = DB::table('service_provider-service')->where('service_id', $request['service_id'])->get()->pluck('service_provider_id');
         $serviceproviders = DB::table('users')->whereIn('id', $service_providers_id)->get()->pluck('id');
         return $serviceproviders;
        /// return new ServiceProviderCollection($serviceproviders);
    }
}
