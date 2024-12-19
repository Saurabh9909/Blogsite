<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogDetails;
use App\Models\BlogType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        $blogType = BlogType::all();
        return view('admin.blog_form', compact('blogType'));
    }
    public function store_blog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'blog_title' => 'required|string|max:255',
            'blog_details' => 'required',
            'blog_type' => 'required',
            'blog_poster' => 'required|image',
        ]);
        if ($validator->fails()) {
            return response()->json(["status" => 400, "message" => $validator->messages()]);
        }
        $blog = new BlogDetails();
        $blog->user_id = $request->user_id;
        $blog->blog_title = $request->blog_title;
        $blog->blog_details = $request->blog_details;
        $blog->blog_type_id = implode(',', $request->blog_type);
        if ($request->hasFile('blog_poster')) {
            $file = $request->file('blog_poster');
            $fileOriginalExtention = $file->getClientOriginalExtension();
            $fileName = 'Blog_Poster/' . Auth::user()->name . '/' . rand(0, 10000000) . '.' . $fileOriginalExtention;
            $blog->blog_poster = $fileName;
            $image_path = 'Blog_Poster/' . Auth::user()->name;
            $file->move(public_path($image_path), $fileName);
        }
        $blog->save();
        return redirect()->back();
    }
    public function blog_type_form()
    {
        return view('admin.blog_type');
    }
    public function store_blog_type(Request $request)
    {
        $blogType = new BlogType();
        $blogType->blog_type = $request->blog_type;
        $blogType->save();
        return redirect()->back();
    }
    public function blogs_list()
    {
        $blogs = BlogDetails::where('user_id', Auth::user()->id)->get();
        $blogsCount = count($blogs);
        return view('admin.blog_records', compact('blogs', 'blogsCount'));
    }
    public function edit_blog(Request $request)
    {
        $blogs = BlogDetails::where('id', $request->id)->first();
        $blog_type = explode(',', $blogs->blog_type_id);
        $blogType = BlogType::all();
        return view('admin.blogs.edit', compact('blogs', 'blogType', 'blog_type'));
    }
    public function update_blog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'blog_title' => 'required|string|max:255',
            'blog_details' => 'required',
            'blog_type' => 'required',
            'blog_poster' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(["status" => 400, "messgae" => $validator->messages()]);
        }
        $blog = BlogDetails::where('id', $request->id)->first();
        $blog->user_id = $request->user_id;
        $blog->blog_title = $request->blog_title;
        $blog->blog_details = $request->blog_details;
        $blog->blog_type_id = implode(',', $request->blog_type);
        if ($request->hasFile('blog_poster')) {
            $file = $request->file('blog_poster');
            $fileOriginalExtention = $file->getClientOriginalExtension();
            $fileName = 'Blog_Poster/' . Auth::user()->name . '/' . rand(0, 10000000) . '.' . $fileOriginalExtention;
            $blog->blog_poster = $fileName;
            $image_path = 'Blog_Poster/' . Auth::user()->name;
            $file->move(public_path($image_path), $fileName);
        } else {
            $blog->blog_poster = $request->blog_poster;
        }
        $blog->update();
        return redirect()->route('list.blog');
    }
    public function delete_blog(Request $request)
    {
        $blog = BlogDetails::where('id', $request->id)->first();
        $filePath = public_path($blog->blog_poster);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $blog->delete();
        return redirect()->route('list.blog');
    }
}
