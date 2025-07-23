<?php

namespace App\Interfaces\Reposities;

interface PaymentReposityInterface
{
    public function create($data);
    public function update($id,$data);
    public function destroy($id);
}
