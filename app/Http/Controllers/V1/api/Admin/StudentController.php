<?php

namespace App\Http\Controllers\V1\api\Admin;

use App\DTO\StudentDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Requests\StudentUpdateRequest;
use App\Interfaces\Services\StudentServiceInterface;
use App\Models\Student;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class StudentController extends Controller
{
     use ResponseTrait;
     public function __construct(protected StudentServiceInterface $studentServiceInterface){}
    public function index()
    {
      $students = Student::all();
      return view('admin.students.index',compact('students'));
    }

   public function create(){
    return view('admin.students.create');
   }
    public function store(StudentStoreRequest $request)
    {
       $studentDTO = new StudentDTO($request->name,$request->description,$request->phone,$request->status);
       $student = $this->studentServiceInterface->store($studentDTO);
       return redirect()->route('students');
    }

    public function show(string $id)
    {
        $student = Student::findOrFail($id);
          return view('admin.students.show',compact('student'));
    }

  public function updated($id){
    $student = Student::findOrFail($id);
    return view('admin.students.update', compact('student'));
}
    public function update(StudentUpdateRequest $request, string $id)
    {
         $studentDTO = new StudentDTO($request->name,$request->description,$request->phone,$request->status);
       $student = $this->studentServiceInterface->update($id,$studentDTO);
       return redirect()->route('students');
    }

    public function destroy(string $id)
    {
        $course = $this->studentServiceInterface->destroy($id);
        return redirect()->route('students')->with('success', 'Oquvchi muvaffaqiyatli ochirildi!');
    }
}
