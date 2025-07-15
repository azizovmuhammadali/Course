<?php

namespace App\Services;

use App\Interfaces\Reposities\CourseListReposityInterface;
use App\Interfaces\Services\CourseListServiceInterface;

class CourseListService implements CourseListServiceInterface
{
    public function __construct(protected CourseListReposityInterface $courseListReposityInterface)
    {
        //
    }
    public function index(){
     return $this->courseListReposityInterface->AllCourses();
    }
    public function create($courseDTO){
     $data = [
        'name' => $courseDTO->name,
        'price' => $courseDTO->price,
        'period' => $courseDTO->period,
     ];
     return $this->courseListReposityInterface->create($data);
    }
    public function show($id){
      return $this->courseListReposityInterface->getById($id);
    }
    public function update($id, $courseDTO){
    $data = [
        'name' => $courseDTO->name,
        'price' => $courseDTO->price,
        'period' => $courseDTO->period,
     ];
     return $this->courseListReposityInterface->findById($id,$data);
    }
    public function destroy($id){
      return $this->courseListReposityInterface->delete($id);
    }
    
}
