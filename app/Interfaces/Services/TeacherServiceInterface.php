<?php

namespace App\Interfaces\Services;

interface TeacherServiceInterface
{
    public function store($teacherDTO);
    public function update($id,$teacherDTO);
    public function destroy($id);
}
