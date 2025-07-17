<?php

namespace App\Interfaces\Reposities;

interface TeacherReposityInterface
{
   public function create($data);
   public function updated($id,$data);
   public function destroy($id);
}
