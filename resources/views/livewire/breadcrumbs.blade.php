<nav aria-label="Breadcrumb" style="padding: 0.75rem 1rem; background-color: #f9fafb; border-radius: 0.5rem; border: 1px solid #e5e7eb;">
    <ol style="display: flex; flex-wrap: wrap; align-items: center; gap: 0; margin: 0; padding: 0; list-style: none;">
        @foreach($items as $index => $item)
            <li style="display: flex; align-items: center;">
                @if($index > 0)
                    @if($separator === 'chevron')
                        <svg style="width: 1rem; height: 1rem; color: #9ca3af; margin: 0 0.75rem; flex-shrink: 0;" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    @elseif($separator === 'slash')
                        <span style="color: #d1d5db; margin: 0 0.75rem; font-weight: 300;">/</span>
                    @elseif($separator === 'dot')
                        <span style="color: #9ca3af; margin: 0 0.75rem; font-size: 0.5rem;">&bull;</span>
                    @else
                        <span style="color: #9ca3af; margin: 0 0.75rem;">{{ $separator }}</span>
                    @endif
                @endif

                @if(isset($item['href']) && $index < count($items) - 1)
                    <a href="{{ $item['href'] }}" style="font-size: 0.875rem; font-weight: 500; color: #6b7280; text-decoration: none; transition: color 0.15s;" onmouseover="this.style.color='#4f46e5'" onmouseout="this.style.color='#6b7280'">
                        @if(isset($item['icon'])){!! $item['icon'] !!}@endif
                        {{ $item['label'] }}
                    </a>
                @else
                    <span style="font-size: 0.875rem; font-weight: 600; color: #111827;">
                        @if(isset($item['icon'])){!! $item['icon'] !!}@endif
                        {{ $item['label'] }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
