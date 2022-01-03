<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advice;
use App\Services\AdviceService;

class AdviceController extends Controller
{
    private $service;
    public function __construct(AdviceService $service){
        $this->service = $service;
    }
    public function store(Request  $request){
        $data = $this->service->create($request);
        return response()->json(['data' => $data], 200);
        // $request->validate([
        //     'content' => 'required|min:5'
        // ]);

        // $advice = new Advice();
        // $advice->content = $request->content;
        // $advice->user_id = Auth()->user()->id;
        // $advice->save();
        // return $advice;
    }

    public function show(Request  $request){
        $request->validate([
            'id' => 'required'
        ]);

        $advice = Advice::find($request->id);
        return $advice;
    }

    public function getList(){
        $advice = Advice::all();
        return $advice;
    }

    public function update(Request  $request){
        $request->validate([
            'content' => 'required|min:5'
        ]);

        $advice = Advice::find($request->id);
        $advice->content = $request->content;
        $advice->save();

        return $advice;
    }

    public function destroy(Request  $request){
        $request->validate([
            'id' => 'required'
        ]);

        $advice = Advice::find($request->id);
        $advice->delete();

        return "ok";
    }

    public function random(){
        $data = [
            'advice' => Advice::all()->random()
        ];
        return response()->json($data, 200);
    }

    public function countAdvice(){
        $data = [
            'count' => Advice::all()->count()
        ];
        return response()->json($data, 200);
    }

    public function token(Request $request){
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        
        if(Auth::attempt($credentials)){
            return Auth::user()->createToken('my_token')->plainTextToken;
        }
        
    }
}
