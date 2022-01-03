<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(Request $request){
        $request->validate([
            'advice_id' => 'required'
        ]);
        $liked = new Like();
        $liked->user_id = Auth()->user()->id;
        $liked->advice_id = $request->advice_id;
        $liked->save();
        return $liked;
    }

    public function unLike(Request $request){
        $request->validate([
            'like_id' => 'required'
        ]);
        Link::find($request->like_id)->delete();
        return "destroy";
    }
}
