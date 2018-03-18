<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class BlogController extends Controller
{
    public function blog() {
    	$posts = DB::table('posts as a')
	                ->where('id', '>', 0)
	                ->orderBy('id', 'desc')
	                ->get();

	    $data['posts'] = $posts;
	    // dd($data);

	    return view('blog', array('data' => $data, 'title' => 'Latest Blog Posts', 'description' => '', 'page' => 'blog'));
	}

	public function posts($slug) {

	    $data = DB::table('posts as a')
	                ->where('a.slug', $slug)
	                ->first();

	    return view('posts', array('data' => $data, 'title' => 'Latest Blog Posts', 'description' => '', 'page' => 'blog'));
	}

	public function create() {

	    $tags = DB::table('blog_tags as a')
	                ->get();

	    $categories = DB::table('blog_categories as a')
	                ->get();

	    return view('posts-create', array('tags' => $tags, 'categories' => $categories));
	}

	public function store(Request $request)
    {        
        $destinationPath = public_path('/assets/img/');
        
        if ($request->file('images')) {
            $img = $request->file('images');
            $name = time() . '.'. $img->getClientOriginalExtension();
            $img->move($destinationPath, $name);
            $request->merge([
                'image' => $name
            ]);
        }

        $slug = str_replace(" ", "-", $request->slug);
        $request->merge([
            'slug' => $slug
        ]);

        Post::create($request->all());

        $request->session()->flash('flash_message', 'Posts successfully added!');
        
        return redirect()->route('post');
    }
}
