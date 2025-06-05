@if ($paginator->hasPages())
<nav role="navigation" aria-label="Simple Pagination Navigation" class="mt-4">
  <div class="join">

    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <button class="join-item btn btn-disabled" disabled aria-label="@lang('pagination.previous')">⮨</button>
    @else
      <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline" rel="prev" aria-label="@lang('pagination.previous')">⮨</a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline" rel="next" aria-label="@lang('pagination.next')">⮩</a>
    @else
      <button class="join-item btn btn-disabled" disabled aria-label="@lang('pagination.next')">⮩</button>
    @endif

  </div>
</nav>
@endif
