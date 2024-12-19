<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{
    public function index()
    {
        // This is count record for Admin  
        $blog = BlogDetails::all();
        $blogsCount = count($blog);
        $user = User::all();
        $userCount = count($user);
        // This is count record for User only 
        $userBlogs = BlogDetails::where('user_id', Auth::user()->id)->get();
        $userBlogsCount = count($userBlogs);
        return view('admin.dashboard', compact('blogsCount', 'userCount', 'userBlogsCount'));
    }
}
