<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class blogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {

        if ($slug == 'success-story')
            $posts = Post::where('category_id', 1)->published()->orderBy('id', 'desc')->paginate(8);
        elseif($slug=='news')
            $posts = Post::where('category_id', '=', 2)->published()->orderBy('id', 'desc')->paginate(8);
        elseif($slug=='risk')
        $posts = Post::where('category_id', '=', 3)->published()->orderBy('id', 'asc')->paginate(8);
        //   dd($posts->count() > 0);
        if ($posts->count() > 0) {
            return view('blog.index', compact('posts', 'slug'));
        }
        return  redirect()->back();
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name, $slug)
    {
        // dd($name, $slug);
        if ($name != '') {


            $page = Post::where('slug', $slug)->published()->first();
            $posts = Post::where('category_id', $page->category_id)->published()->take(4)->orderBy('id', 'desc')->get();

            //dd($relatedpost);

            //      dd($page);
            if ($page) {

                $slug = $name;
                // dd($page);
                // return view('frontend.aboutus',compact('page'));
                return view('page', compact('page', 'posts', 'slug'));
            }
        }


        return  redirect()->back();
    }





    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
}
