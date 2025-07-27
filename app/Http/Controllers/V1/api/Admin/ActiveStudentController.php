<?php

namespace App\Http\Controllers\V1\api\Admin;

use App\DTO\ActiveStudentDTO;
use App\Models\Student;
use App\Models\CourseList;
use Illuminate\Http\Request;
use App\Models\ActiveStudent;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActiveStudentStoreRequest;
use App\Http\Requests\ActiveStudentUpdateRequest;
use App\Interfaces\Services\ActiveStudentServiceInterface;

class ActiveStudentController extends Controller
{
    public function __construct(protected ActiveStudentServiceInterface $activeStudentServiceInterface){}
    public function index()
    {
         $activeStudents = ActiveStudent::with(['student', 'course'])->get();
    return view('admin.activestudents.index', compact('activeStudents'));
    }

    public function create(){
     $students = Student::where('status', true)->get();
    $courses = CourseList::all();
    return view('admin.activestudents.create', compact('students', 'courses'));
    }
    public function store(ActiveStudentStoreRequest $request)
    {
       $activestudentDTO = new ActiveStudentDTO($request->student_id,$request->course_list_id,$request->payment_amount,$request->lesson_paid,$request->lesson_passed,$request->lesson_debt_count,$request->lesson_debt_sum,$request->month);
       $activestudent = $this->activeStudentServiceInterface->create($activestudentDTO);
       return redirect()->route('activestudents.index');
    }

    public function show(string $id)
    {
        $activestudent = ActiveStudent::with(['student', 'course'])->findOrFail($id);
       return view('admin.activestudents.show',compact('activestudent'));
    }
    public function edit($id){
 $activestudent = ActiveStudent::findOrFail($id);
   $students = Student::where('status', true)->get();
    $courses = CourseList::all();
       return view('admin.activestudents.update', compact('students', 'courses','activestudent'));
    }
    public function update(ActiveStudentUpdateRequest $request, string $id)
    {
          $activestudent = ActiveStudent::findOrFail($id);
        $activestudentDTO = new ActiveStudentDTO($request->student_id,$request->course_list_id,$request->payment_amount,$request->lesson_paid,$request->lesson_passed,$request->lesson_debt_count,$request->lesson_debt_sum,$request->month);
       $activestudent = $this->activeStudentServiceInterface->update($id,$activestudentDTO);
       return redirect()->route('activestudents.index');
    }

    public function destroy(string $id)
    {
          $activestudent = ActiveStudent::findOrFail($id);
          $activestudent = $this->activeStudentServiceInterface->delete($id);
           return redirect()->route('activestudents.index');
    }
}
