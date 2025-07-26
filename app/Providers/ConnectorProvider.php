<?php

namespace App\Providers;

use App\Interfaces\Reposities\CourseListReposityInterface;
use App\Interfaces\Reposities\CourseStudentReposityInterface;
use App\Interfaces\Reposities\PaymentReposityInterface;
use App\Interfaces\Reposities\StudentReposityInterface;
use App\Interfaces\Reposities\TeacherReposityInterface;
use App\Interfaces\Services\CourseListServiceInterface;
use App\Interfaces\Services\CourseStudentServiceInterface;
use App\Interfaces\Services\PaymentServiceInterface;
use App\Interfaces\Services\StudentServiceInterface;
use App\Interfaces\Services\TeacherServiceInterface;
use App\Reposities\CourseListReposity;
use App\Reposities\CourseStudentReposity;
use App\Reposities\PaymentReposity;
use App\Reposities\StudentReposity;
use App\Reposities\TeacherReposity;
use App\Services\CourseListService;
use App\Services\CourseStudentService;
use App\Services\PaymentService;
use App\Services\StudentService;
use App\Services\TeacherService;
use Illuminate\Support\ServiceProvider;

class ConnectorProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->bind(CourseListServiceInterface::class,CourseListService::class);
        $this->app->bind(CourseListReposityInterface::class,CourseListReposity::class);
        $this->app->bind(TeacherServiceInterface::class,TeacherService::class);
        $this->app->bind(TeacherReposityInterface::class,TeacherReposity::class);
        $this->app->bind(StudentReposityInterface::class,StudentReposity::class);
        $this->app->bind(StudentServiceInterface::class,StudentService::class);
        $this->app->bind(PaymentServiceInterface::class,PaymentService::class);
        $this->app->bind(PaymentReposityInterface::class,PaymentReposity::class);
        $this->app->bind(CourseStudentServiceInterface::class,CourseStudentService::class);
        $this->app->bind(CourseStudentReposityInterface::class,CourseStudentReposity::class);
    }
}
