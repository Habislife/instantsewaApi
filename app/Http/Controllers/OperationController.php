<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'cart_collection_id' =>'required',
            'address_latitude' =>'required',
            'address_longitude' =>'required',
            'address_address' =>'required',
            'service_provider_id' => 'required',
            'service_user_id' => 'required',
            'start_time' =>'required',
            'end_time' =>'required',
        ];

       $this->validate($request, $rules);
         $operation = new Operation();
       $operation->cart_collection_id  = $request->cart_collection_id;
       $operation->address_latitude  = $request->address_latitude;
       $operation->address_longitude  = $request->address_longitude;
       $operation->address_address  = $request->address_address;
       $operation->service_provider_id  = $request->service_provider_id;
       $operation->service_user_id  = $request->service_user_id;
       $operation->start_time  = $request->start_time;
       $operation->end_time  = $request->end_time;
      $operation->save();
        return $operation;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function show(Operation $operation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function edit(Operation $operation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operation $operation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operation  $operation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operation $operation)
    {
        //
    }
}
