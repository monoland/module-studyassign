<?php

namespace Module\Studyassign\Providers;

use Illuminate\Support\ServiceProvider;

class StudyassignServiceProvider extends ServiceProvider
{
    /**
     * $moduleNamespace variable
     *
     * @var string
     */
    protected $moduleNamespace = 'module';

    /**
     * $moduleName variable
     *
     * @var string
     */
    protected $moduleName = 'studyassign';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(
            module_path(
                $this->moduleNamespace, 
                $this->moduleName, 
                'resources' . DIRECTORY_SEPARATOR . 'views'
            ),
            $this->moduleName
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}