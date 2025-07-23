<?php

namespace App\Http\Controllers\V1\api\Admin;

use App\DTO\PaymentDTO;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentStoreRequest;
use App\Http\Requests\PaymentUpdateRequest;
use App\Interfaces\Services\PaymentServiceInterface;
use App\Models\CourseList;

class PaymentController extends Controller
{
    public function __construct(protected PaymentServiceInterface $paymentServiceInterface){}
   public function index()
{
    $payments = Payment::with(['student', 'course'])->get();
    return view('admin.payments.index', compact('payments'));
}
      public function create(){
         $students = Student::all();
     $courses = CourseList::all();
    return view('admin.payments.create', compact('students', 'courses'));
      }
    public function store(PaymentStoreRequest $request)
    {
      
        $paymentDTO = new PaymentDTO($request->student_id,$request->course_list_id,$request->payment_sum,$request->lesson_count_paid,$request->month,$request->date_at);
        $payment = $this->paymentServiceInterface->create($paymentDTO);
        return redirect()->route('payments.index');
    }


    public function show(string $id)
    {
         $payment = Payment::with(['student', 'course'])->findOrFail($id);
       return view('admin.payments.show',compact('payment'));
    }
     public function edit($id)
{
    $payment = Payment::findOrFail($id);
    $students = Student::all();
    $courses = CourseList::all();
    return view('admin.payments.update', compact('payment', 'students', 'courses'));
}
    public function update(PaymentUpdateRequest $request, string $id)
    {
         $payment = Payment::findOrFail($id);
          $paymentDTO = new PaymentDTO($request->student_id,$request->course_list_id,$request->payment_sum,$request->lesson_count_paid,$request->month,$request->date_at);
        $payment = $this->paymentServiceInterface->update($id,$paymentDTO);
        return redirect()->route('payments.index');
    }

    public function destroy(string $id)
    {
        $payment =  $this->paymentServiceInterface->delete($id);
        return redirect()->route('payments.index');
    }
}
