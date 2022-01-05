<?php

namespace App\Services;

use App\Interfaces\AdviceRepositoryInterface;
use Illuminate\Http\Request;

class AdviceService{

    private AdviceRepositoryInterface $repository;

    public function __construct(AdviceRepositoryInterface $repo){
        $this->repository = $repo;
    }

    public function create(Request $request){
        $request->validate([
            'content' => 'required|min:5'
        ]);
        $data =[
            'content' => $request->content,
            'user_id' => Auth()->user()->id,
        ];

        return $this->repository->create($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required|min:5',
            'advice_id' => 'required'
        ]);

        $data = [
            'content' => $request['content'],
        ];

        $this->repository->update($data, $request['advice_id']);

        return $this->show($request);

    }

    public function show(Request $request)
    {
        $request->validate(['advice_id' => 'required|']);

        return $this->repository->show($request['advice_id']);
    }

    public function destroy(Request $request)
    {
        $request->validate(['advice_id' => 'required|']);
        if($this->repository->destroy($request['advice_id'])){
            return $data = [
                'status' => 'success'
            ];
        }
        return $data = [
            'status' => 'failed to delete'
        ];
    }

    public function listAll()
    {
        return $this->repository->listAll();
    }

    public function random()
    {
        return $this->repository->random();
    }

    public function countAdvice()
    {
        return $this->repository->countAdvice();
    }
}