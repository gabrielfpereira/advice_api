<?php

namespace App\Repositories;

use App\Models\Advice;

class AdviceRepository{
    private $model;

    public function __construct(Advice $model ){
        $this->model = $model;
    }

    public function create($data)
    {
        $this->model->content = $data['content'];
        $this->model->user_id = $data['user_id'];
        $this->model->save();
        return $this->model;
    }
}