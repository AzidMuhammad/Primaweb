<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Member;

class AdminController extends Controller
{
    public function index()
    {
        return view('adminView/dashboard', [
            'tittle' => 'Dashboard',
            'posts' => Blog::latest()->filter(request(['search', 'category']))->paginate(3)->withQueryString(),
            'members' => Member::paginate(3)
        ]);
    }
}
