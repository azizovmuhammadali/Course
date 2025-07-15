<?php

namespace App\Interfaces\Reposities;

interface CourseListReposityInterface
{
    public function AllCourses();
    public function create($data);
    public function getById($id);
    public function findById($id,$data);
    public function delete($id);
}
