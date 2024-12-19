<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDataController extends Controller
{
    public function list()
    {
        $user=User::all();
        $userCount=count($user);
        return view('admin.user',compact('user','userCount'));
    }
}
