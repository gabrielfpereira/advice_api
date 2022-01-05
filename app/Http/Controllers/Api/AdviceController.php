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
        return response()->json($data, 200);
    }

    public function show(Request  $request)
    {
        return $this->service->show($request);
    }

    public function getList()
    {
        $data = $this->service->listAll();
        return response()->json($data, 200);
    }

    public function update(Request  $request){
        $data = $this->service->update($request);
        return response()->json($data, 200);
    }

    public function destroy(Request  $request)
    {
        $data = $this->service->destroy($request);
        return response()->json($data, 200);;
    }

    public function random()
    {
        $data = $this->service->random();
        return response()->json($data, 200);
    }

    public function countAdvice()
    {
        $data = $this->service->countAdvice();
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
