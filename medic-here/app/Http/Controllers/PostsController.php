<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Rating;
use Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = [];
        if ($request->input('sortBy') == 'rating') {
            $posts = Post::orderby('avg_rating', 'desc')->paginate(6);
        }
        else
            $posts = Post::orderby('created_at', 'desc')->paginate(6);

        foreach($posts as $post)
        {
            $name = $post->user->name;
            $post['author'] = $name;
        }

        return view('pages.blog')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user())
        {
            return view('pages.create_post');
        }
        else
        {
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "body" => "required"
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = Auth::id();
        $post->avg_rating = 0;
        $post->save();
        
        return redirect('/posts')->with('success', 'Post successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $post['author'] = $post->user->name;
        
        $rating = 0;

        if(Auth::user())
        {
            $ratings = Rating::select('value')->where([
                ['user_id', '=', Auth::id()],
                ['post_id', '=', $post->id]
            ])->get();
            
            $count = count($ratings);

            if($count > 0)
            {
                $rating = $ratings[0]->value;
            }
        }

        $post['rating'] = $rating;

        return view('pages.full_post')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
