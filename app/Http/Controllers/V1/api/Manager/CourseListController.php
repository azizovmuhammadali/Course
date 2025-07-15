<?php

namespace App\Http\Controllers\V1\api\Manager;

use App\DTO\CourseListDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseListStoreRequest;
use App\Http\Resources\CourseListResource;
use App\Interfaces\Services\CourseListServiceInterface;
use App\Trait\ResponseTrait;
use Illuminate\Http\Request;

class CourseListController extends Controller
{
 use ResponseTrait;
     public function __construct(protected CourseListServiceInterface $courseListServiceInterface){}
    public function index()
    {
        $courses = $this->courseListServiceInterface->index();
        return $this->success(CourseListResource::collection($courses));
    }

    public function store(CourseListStoreRequest $request)
    {
        $courseDTO = new CourseListDTO($request->name,$request->price,$request->period);
        $course = $this->courseListServiceInterface->create($courseDTO);
        return $this->success(new CourseListResource($course));
    }

    public function show(string $id)
    {
       $course = $this->courseListServiceInterface->show($id);
      return $this->success(new CourseListResource($course));
    }

    public function update(Request $request, string $id)
    {
       $courseDTO = new CourseListDTO($request->name,$request->price,$request->period);
        $course = $this->courseListServiceInterface->update($id,$courseDTO);
        return $this->success(new CourseListResource($course));
    }

    public function destroy(string $id)
    {
          $course = $this->courseListServiceInterface->destroy($id);
      return $this->success([],204);
    }
}
