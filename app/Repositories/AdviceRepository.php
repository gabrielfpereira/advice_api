<?php

namespace App\Repositories;

use App\Models\Advice;
use App\Interfaces\AdviceRepositoryInterface;

class AdviceRepository implements AdviceRepositoryInterface{
    
    public function create(Array $data)
    {
        return Advice::create($data);
    }

    public function update(Array $data, $id)
    {
        return Advice::whereId($id)->update($data);
    }

    public function destroy($id)
    {
        return Advice::destroy($id);
    }

    public function show($id)
    {
        return Advice::findOrFail($id);
    }

    public function listAll()
    {
        return Advice::all();
    }

    public function Random()
    {
        return Advice::all()->random();
    }

    public function countAdvice()
    {
        return Advice::all()->count();
    }
}