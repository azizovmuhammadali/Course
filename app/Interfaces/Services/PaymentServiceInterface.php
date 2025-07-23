<?php

namespace App\Interfaces\Services;

interface PaymentServiceInterface
{
    public function create($paymentDTO);
    public function update($id,$paymentDTO);
    public function delete($id);
}
