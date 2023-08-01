<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function viewLike(){
        $userId = auth()->id();
        $liked = Like::where('liker_id', $userId)->pluck('liker_id')->toArray();
        $likeCandidate = User::whereNotIn('id', $liked)->first();

        return view('user.home', compact('likeCandidate'));
    }

    public function like(Request $request){
        $like = new Like();
        $like->liker_id = $request->liker_id;
        $like->liked_id = $request->liked_id;
        $like->status = true;
        $like->save();

        return redirect('/user/home');
    }

    public function dislike(Request $request){
        $dislike = new Like();
        $dislike->liker_id = $request->liker_id;
        $dislike->liked_id = $request->liked_id;
        $dislike->status = false;
        $dislike->save();

        return redirect('/woman/match');
    }
}
