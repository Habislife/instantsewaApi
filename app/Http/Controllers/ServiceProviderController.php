<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceProviderCollection;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serviceproviders = DB::table('users')->where('user_type', 'ServiceProvider')->get();
       return new ServiceProviderCollection($serviceproviders);
    }

   

    public function show($id)
    {
         $serviceproviders = DB::table('users')->where('id', $id)->get();
         return new ServiceProviderCollection($serviceproviders);
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceProvider $serviceProvider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceProvider  $serviceProvider
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceProvider $serviceProvider)
    {
        //
    }
   public static function categoryName($id)
    {
         $subcategories_id = DB::table('service_provider-service')->where('service_provider_id', $id)->get()->pluck('subcategories_id');
        $categories_name = DB::table('sub_categories')->where('id', $subcategories_id)->get()->pluck('name');
        return $categories_name;
    }
}
