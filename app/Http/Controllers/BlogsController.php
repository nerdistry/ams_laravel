<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blogs;

class BlogsController extends Controller
{
    public function show_blogs(){

        $blog_entries = Blogs::all();
       return view('blogs',
       ['all_blog_entries'=>$blog_entries]); // Confirm if it works - controller linked to view
    }
    //
}
