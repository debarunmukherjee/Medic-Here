<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use App\Post;
use Auth;

class RatingsController extends Controller
{
    public function index(Request $request)
    {
        $res = "";
        if(Auth::user())
        {
            $val = $request->input('value');
            $post_id = $request->input('post_id');

            $rating = Rating::where([
                ['user_id', '=', Auth::id()],
                ['post_id', '=', $post_id]
            ])->get();

            if(count($rating) > 0)
            {
                $rating[0]->value = $val;
                $rating[0]->save();
            }
            else
            {
                $rating = new Rating;
                $rating->user_id = Auth::id();
                $rating->post_id = $post_id;
                $rating->value = $val;

                $rating->save();
            }

            $rating = 0;

            $ratings = Rating::select('value')->where([
                ['post_id', '=', $post_id]
            ])->get();
            
            $count = count($ratings);

            if($count > 0)
            {
                foreach($ratings as $r)
                {
                    $rating += $r->value;
                }

                $rating /= count($ratings);
            }

            $post = Post::where([
                ['id', '=', $post_id]
            ])->get();

            $post[0]->avg_rating = $rating;
            $post[0]->save();
            
            $res = 'success';
        }
        else{
            $res = "error";
        }

        $response = array(
            'status' => $res
        );
        return response()->json($response); 
    }
}
