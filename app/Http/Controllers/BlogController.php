<?php

namespace App\Http\Controllers;

use App\Models\BlogDetails;
use App\Models\BlogType;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // get all data latest added will display first
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        // get recent five post data to display in sidebar 
        $recentBlogs = BlogDetails::orderBy('created_at', 'desc')->paginate('5');
        // All categories in blog type
        $blogCategories = BlogType::all();
        return view('content.blog', compact('blogs', 'recentBlogs', 'blogCategories'));
    }
    public function blogSinglePage(Request $request)
    {
        // get recent five post data to display in sidebar 
        $recentBlogs = BlogDetails::orderBy('created_at', 'desc')->paginate('5');
        // All categories in blog type
        $blogCategories = BlogType::all();
        // Particular blog record with full information on seprate page
        $blogDetails = BlogDetails::where('id', $request->id)->first();
        return view('content.blog_single', compact('blogDetails', 'recentBlogs', 'blogCategories'));
    }
}
