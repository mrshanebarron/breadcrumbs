<?php

namespace MrShaneBarron\Breadcrumbs\Livewire;

use Livewire\Component;

class Breadcrumbs extends Component
{
    public array $items = [];
    public string $separator = 'chevron';
    public string $size = 'md';

    public function mount(
        array $items = [],
        string $separator = 'chevron',
        string $size = 'md'
    ): void {
        $this->items = $items;
        $this->separator = $separator;
        $this->size = $size;
    }

    public function render()
    {
        return view('ld-breadcrumbs::livewire.breadcrumbs');
    }
}
