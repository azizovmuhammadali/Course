<?php

namespace App\Services;

use App\Interfaces\Reposities\TeacherReposityInterface;
use App\Interfaces\Services\TeacherServiceInterface;

class TeacherService implements TeacherServiceInterface
{

    public function __construct(protected TeacherReposityInterface $teacherReposityInterface)
    {
        //
    }
    public function store($teacherDTO){
    $data = [
        'name' => $teacherDTO->name,
        'description' => $teacherDTO->description,
        'phone' => $teacherDTO->phone,
    ];
    return $this->teacherReposityInterface->create($data);
    }
    public function update($id, $teacherDTO){
       $data = [
        'name' => $teacherDTO->name,
        'description' => $teacherDTO->description,
        'phone' => $teacherDTO->phone,
    ];
     return $this->teacherReposityInterface->updated($id,$data);
    }
    public function destroy($id){
     return $this->teacherReposityInterface->destroy($id);
    }
}
