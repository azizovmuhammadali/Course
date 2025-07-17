<?php

namespace App\Http\Controllers\V1\api\Manager;

use App\DTO\TeacherDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherStoreRequest;
use App\Http\Requests\TeacherUpdateRequest;
use App\Http\Resources\TeacherResource;
use App\Interfaces\Services\TeacherServiceInterface;
use App\Models\Teacher;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
   use ResponseTrait;
    public function __construct(protected TeacherServiceInterface $teacherServiceInterface){}
    public function index()
    {
        $teachers = Teacher::all();
        return view('manager.teachers.index',compact('teachers'));
    }
      public function create(){
        return view('manager.teachers.create');
      }
    public function store(TeacherStoreRequest $request)
    {
       $teacherDTO = new TeacherDTO($request->name,$request->description,$request->phone);
       $teacher = $this->teacherServiceInterface->store($teacherDTO);
       return redirect()->route('manager.teachers');
    }

    public function show(string $id)
    {
        $teacher = Teacher::find($id);
        return view('manager.teachers.show',compact('teacher'));
    }
    public function updated($id){
        $teacher = Teacher::findOrFail($id);
          return view('manager.teachers.update',compact('teacher'));
    }
    public function update(TeacherUpdateRequest $request, string $id)
    {
          $teacherDTO = new TeacherDTO($request->name,$request->description,$request->phone);
       $teacher = $this->teacherServiceInterface->update($id,$teacherDTO);
        return redirect()->route('manager.teachers');
    }

    public function destroy(string $id)
    {
         $course = $this->teacherServiceInterface->destroy($id);
        return redirect()->route('manager.teachers')->with('success', 'Kurs muvaffaqiyatli ochirildi!');
    }
}
