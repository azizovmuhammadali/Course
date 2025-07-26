<?php

namespace App\Http\Controllers\V1\api\Admin;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\CourseList;
use Illuminate\Http\Request;
use App\DTO\CourseStudentDTO;
use App\Models\CourseStudent;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseStudentStoreRequest;
use App\Http\Requests\CourseStudentUpdateRequest;
use App\Interfaces\Services\CourseStudentServiceInterface;

class CourseStudentController extends Controller
{
    public function __construct(protected CourseStudentServiceInterface $courseStudentServiceInterface){}
    public function index()
    {
        $coursestudents = CourseStudent::with('student','course','teacher')->get();
        return view('admin.coursestudents.index',compact('coursestudents'));
    }

    public function create(){
    $students = Student::all();
     $courses = CourseList::all();
     $teachers = Teacher::all();
     return view('admin.coursestudents.create',compact('students', 'courses','teachers'));
    }
    public function store(CourseStudentStoreRequest $request)
    {
        $coursestudentDTO = new CourseStudentDTO($request->student_id,$request->course_list_id,$request->teacher_id,$request->homework_status,$request->month,$request->date_at,$request->payment_status);
        $coursestudent = $this->courseStudentServiceInterface->create($coursestudentDTO);
        return redirect()->route('coursestudents.index');
    }


    public function show(string $id)
    {
        $coursestudent = CourseStudent::with('student','course','teacher')->findOrFail($id);
        return view('admin.coursestudents.show',compact('coursestudent'));
    }
     public function edit($id){
    $coursestudent = CourseStudent::findOrFail($id);
     $students = Student::all();
     $courses = CourseList::all();
     $teachers = Teacher::all();
     return view('admin.coursestudents.update',compact('students', 'courses','teachers','coursestudent'));
     }
    public function update(CourseStudentUpdateRequest $request, string $id)
    {
         $coursestudent = CourseStudent::findOrFail($id);
        $coursestudentDTO = new CourseStudentDTO($request->student_id,$request->course_list_id,$request->teacher_id,$request->homework_status,$request->month,$request->date_at,$request->payment_status);
        $coursestudent = $this->courseStudentServiceInterface->update($id,$coursestudentDTO);
        return redirect()->route('coursestudents.index');
    }

    public function destroy(string $id)
    {
        $coursestudent = $this->courseStudentServiceInterface->delete($id);
        return redirect()->route('coursestudents.index');
    }
}
