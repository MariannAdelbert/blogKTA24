<p class="text-sm text-gray-500 mt-2">Paginatsioon on disainitud DaisyUI komponentidega ja roosade nuppudega.</p>

@if ($paginator->hasPages())
    {{-- CUSTOM PAGINATION using DaisyUI --}}
    <nav role="navigation" aria-label="Pagination Navigation" class="mt-4 border-2 border-indigo-400 p-4 rounded-lg shadow-md">
        <div class="join">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" disabled aria-label="@lang('pagination.previous')">⮨</button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline btn-primary hover:bg-primary hover:text-white transition" rel="prev" aria-label="@lang('pagination.previous')">⮨</a>
            @endif

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <button class="join-item btn btn-disabled" disabled>{{ $element }}</button>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="join-item btn btn-primary btn-active" aria-current="page">{{ $page }}</button>
                        @else
                            <a href="{{ $url }}" class="join-item btn btn-outline btn-primary hover:bg-primary hover:text-white transition">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline btn-primary hover:bg-primary hover:text-white transition" rel="next" aria-label="@lang('pagination.next')">⮩</a>
            @else
                <button class="join-item btn btn-disabled" disabled aria-label="@lang('pagination.next')">⮩</button>
            @endif
        </div>
    </nav>
@endif
