<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlipController extends Controller
{
    public function store(Request  $request){
        $request->validate([
            'content' => 'required|min:5'
        ]);

        $slip = new Slip();
        $slip->content = $request->content;
        $slip->user_id = Auth()->user()->id;
        $slip->save();
        return $slip;
    }

    public function show(Request  $request){
        $request->validate([
            'id' => 'required'
        ]);

        $slip = Slip::find($request->id);
        return $slip;
    }

    public function getList(){
        $slips = Slip::all();
        return $slips;
    }

    public function update(Request  $request){
        $request->validate([
            'content' => 'required|min:5'
        ]);

        $slip = Slip::find($request->id);
        $slip->content = $request->content;
        $slip->save();

        return $slip;
    }

    public function destroy(Request  $request){
        $request->validate([
            'id' => 'required'
        ]);

        $slip = Slip::find($request->id);
        $slip->delete();

        return "ok";
    }

    public function random(){
        $data = [
            'slip' => Slip::all()->random()
        ];
        return response()->json($data, 200);
    }

    public function countSlip(){
        $data = [
            'count' => Slip::all()->count()
        ];
        return response()->json($data, 200);
    }
}
