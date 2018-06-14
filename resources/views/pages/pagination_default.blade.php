@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">ก่อนหน้า</span></li>
        @else
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" class="page-link" rel="prev">ก่อนหน้า</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                    <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" class="page-link" rel="next">ถัดไป</a></li>
        @else
            <li class="page-item disabled"><span class="page-link">ถัดไป</span></li>
        @endif
    </ul>
</nav>
    @endif