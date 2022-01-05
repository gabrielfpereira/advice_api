<?php

namespace App\Interfaces;

interface AdviceRepositoryInterface{
    public function create(Array $data);
    public function update(Array $data, $id);
    public function destroy($id);
    public function show($id);
    public function listAll();
}