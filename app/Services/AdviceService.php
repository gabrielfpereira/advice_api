<?php

namespace App\Services;

use App\Repositories\AdviceRepository;
use Illuminate\Http\Request;

class AdviceService{

    private $repository;

    public function __construct(AdviceRepository $repo){
        $this->repository = $repo;
    }

    public function create(Request $data){
        $data->validate([
            'content' => 'required|min:5'
        ]);
        $data['user_id'] = Auth()->user()->id;

        //dd($data);
        return $this->repository->create($data);
    }
}