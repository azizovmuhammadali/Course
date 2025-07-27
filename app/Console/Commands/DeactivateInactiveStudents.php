<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use Carbon\Carbon;

class DeactivateInactiveStudents extends Command
{
    protected $signature = 'students:deactivate-inactive';
    protected $description = 'Deactivate students who have not made a payment in the last 30 days';

    public function handle()
    {
        $now = Carbon::now();
        $thresholdDate = $now->subDays(30);

        $students = Student::where('status', true)->get();

        $count = 0;

        foreach ($students as $student) {
            $lastPayment = $student->payments()->latest('date_at')->first();

            // Agar hech qanday to'lov qilmagan yoki oxirgi to'lovi 30 kundan oldin bo'lgan bo‘lsa
            if (!$lastPayment || Carbon::parse($lastPayment->date_at)->lt($thresholdDate)) {
                $student->update(['status' => false]);
                $count++;
            }
        }

        $this->info("Deactivated $count students who haven't paid in the last 30 days.");
    }
}
