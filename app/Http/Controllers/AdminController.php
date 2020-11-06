<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function index()
    {
        return new UserCollection(User::paginate(10));
    }

}
