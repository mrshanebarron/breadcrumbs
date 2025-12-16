<?php

namespace MrShaneBarron\Breadcrumbs\Livewire;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public array $items = [];
    public string $separator = 'chevron';

    public function mount(array $items = [], string $separator = 'chevron'): void
    {
        $this->items = $items;
        $this->separator = $separator;
    }

    public function render()
    {
        return view('sb-breadcrumbs::livewire.breadcrumbs');
    }
}
