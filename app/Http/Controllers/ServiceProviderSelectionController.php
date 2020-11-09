<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceProviderCollection;
use App\Http\Resources\ServiceProviderSelectionCollection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceProviderSelectionController extends Controller
{
    public function selectionList(Request $request)
    {
    	$rules = [
            'service_id' =>'required',
            'serviceusers_latitude' =>'required',
            'serviceusers_longitude' =>'required',
            'startDate' =>'required',
            'endDate' =>'required',
        ];
        $this->validate($request, $rules);
        $start = Carbon::parse($request->startDate);
        $end = Carbon::parse($request->endDate);
         $start=$start->subMinutes(14);
          $end = $end->addMinutes(14);
        $service_providers_id = DB::table('service_provider-service')->where('service_id', $request['service_id'])->get()->pluck('service_provider_id');
        $free_service_providers = DB::table('operations')->whereNotBetween('start_time', [$start, $end])->whereNotBetween('end_time', [$start, $end])->get()->pluck('service_provider_id');
        $location = DB::table('users')
        ->select('id','username', 'address_latitude', 'address_longitude','address_address', DB::raw(sprintf(
            '(6371 * acos(cos(radians(%1$.7f)) * cos(radians(address_latitude)) * cos(radians(address_longitude) - radians(%2$.7f)) + sin(radians(%1$.7f)) * sin(radians(address_latitude)))) AS distance',
            $request->input('serviceusers_latitude'),
            $request->input('serviceusers_longitude')
        )))->whereIn('id',$free_service_providers)
        ->having('distance', '<', 50)
        ->orderBy('distance', 'asc')
        ->get();
         return new ServiceProviderSelectionCollection($location);
    }
}
