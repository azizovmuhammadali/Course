<?php

namespace App\Interfaces\Reposities;

interface ActiveStudentReposityInterface
{
    public function create($data);
    public function update($id,$data);
    public function delete($id);
}
