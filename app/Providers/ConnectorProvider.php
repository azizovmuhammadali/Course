<?php

namespace App\Providers;

use App\Interfaces\Reposities\CourseListReposityInterface;
use App\Interfaces\Reposities\TeacherReposityInterface;
use App\Interfaces\Services\CourseListServiceInterface;
use App\Interfaces\Services\TeacherServiceInterface;
use App\Reposities\CourseListReposity;
use App\Reposities\TeacherReposity;
use App\Services\CourseListService;
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
    }
}
