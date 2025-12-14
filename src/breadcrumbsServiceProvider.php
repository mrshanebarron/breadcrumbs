<?php

namespace MrShaneBarron\Breadcrumbs;

use Illuminate\Support\ServiceProvider;

class BreadcrumbsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('ld-breadcrumbs', Livewire\Breadcrumbs::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-breadcrumbs');
    }
}
