<?php

namespace App\Http\Controllers\Blog;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function dashboard()
    {
        return view('backend.blog.index');
    }

    public function store(Request $request)
    {
        $rule = [
            'title' => 'required|min:10|unique:blogs,title',
            'body' => 'required',
        ];

        // $request->validate($rule);

        // $this->validate($request, $rule);

        $blog = Blog::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return response(['data' => $blog, 'message' => 'Blog created successfully.']);

    }
}
