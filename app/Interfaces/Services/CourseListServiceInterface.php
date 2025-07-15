<?php

namespace App\Interfaces\Services;

interface CourseListServiceInterface
{
    public function index();
    public function create($courseDTO);
    public function show($id);
    public function update($id,$courseDTO);
    public function destroy($id);
}
