<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PostCategory;

class BlogGuestController extends Controller
{

    public function index()
    {
        return view('blog/blogGuest', [
            'categories' => PostCategory::all(),
            'posts' => Blog::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString(),
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blog/blogGuestSingle', [
            'data' => $blog,
            'recents' => Blog::latest()->paginate(10),
        ]);
    }
}
