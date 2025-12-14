<nav aria-label="Breadcrumb">
    <ol @class(['flex items-center', 'space-x-2 text-sm' => $size === 'sm', 'space-x-3 text-base' => $size === 'md', 'space-x-4 text-lg' => $size === 'lg'])>
        @foreach($items as $index => $item)
            <li class="flex items-center">
                @if($index > 0)
                    @if($separator === 'chevron')
                        <svg class="w-4 h-4 text-gray-400 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    @elseif($separator === 'slash')
                        <span class="text-gray-400 mx-2">/</span>
                    @endif
                @endif
                @if(isset($item['href']) && $index < count($items) - 1)
                    <a href="{{ $item['href'] }}" class="text-gray-500 hover:text-gray-700">{{ $item['label'] }}</a>
                @else
                    <span class="text-gray-900 font-medium">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
