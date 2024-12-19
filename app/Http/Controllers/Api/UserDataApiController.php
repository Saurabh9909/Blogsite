<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserDataApiController extends Controller
{
    public function getAllRecord()
    {
        $user =User::all();
        dd($user);
    }
}
