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
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validatedData) {
            Blog::create([
                'title' => $request->title,
                'body' => $request->body,
            ]);
            // DB::table('blogs')->insert($request->all());
        }
    }
}
