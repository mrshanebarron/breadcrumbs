<?php

namespace MrShaneBarron\breadcrumbs\View\Components;

use Illuminate\View\Component;

class breadcrumbs extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ld-breadcrumbs::components.breadcrumbs');
    }
}
