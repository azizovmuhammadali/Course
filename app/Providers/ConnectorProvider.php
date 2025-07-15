<?php

namespace App\Providers;

use App\Interfaces\Reposities\CourseListReposityInterface;
use App\Interfaces\Services\CourseListServiceInterface;
use App\Reposities\CourseListReposity;
use App\Services\CourseListService;
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
    }
}
