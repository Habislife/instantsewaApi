<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryServiceController extends Controller
{
    public function index( $id)
    {
        $services = DB::table('services')->where('sub_categories_id', $id)->get();
       return new ServiceCollection($services);
    }
    
}
