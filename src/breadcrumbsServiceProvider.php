<?php

namespace MrShaneBarron\breadcrumbs;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\breadcrumbs\Livewire\breadcrumbs;
use MrShaneBarron\breadcrumbs\View\Components\breadcrumbs as Bladebreadcrumbs;
use Livewire\Livewire;

class breadcrumbsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-breadcrumbs.php', 'ld-breadcrumbs');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-breadcrumbs');

        Livewire::component('ld-breadcrumbs', breadcrumbs::class);

        $this->loadViewComponentsAs('ld', [
            Bladebreadcrumbs::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ld-breadcrumbs.php' => config_path('ld-breadcrumbs.php'),
            ], 'ld-breadcrumbs-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/ld-breadcrumbs'),
            ], 'ld-breadcrumbs-views');
        }
    }
}
