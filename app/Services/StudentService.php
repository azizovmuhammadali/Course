<?php

namespace App\Services;

use App\Interfaces\Reposities\StudentReposityInterface;
use App\Interfaces\Services\StudentServiceInterface;

class StudentService implements StudentServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected StudentReposityInterface $studentReposityInterface)
    {
        //
    }
    public function store($studentDTO){
      $data = [
        'name' => $studentDTO->name,
        'description' => $studentDTO->description,
        'phone' => $studentDTO->phone,
        'status' => $studentDTO->status,
      ];
      return $this->studentReposityInterface->create($data);
    }
    public function update($id, $studentDTO)
    {
    $data = [
        'name' => $studentDTO->name,
        'description' => $studentDTO->description,
        'phone' => $studentDTO->phone,
        'status' => $studentDTO->status,
      ];
      return $this->studentReposityInterface->updated($id,$data);
    }
    public function destroy($id){
   return $this->studentReposityInterface->delete($id);
    }
}

