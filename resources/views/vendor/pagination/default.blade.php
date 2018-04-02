@if ($paginator->hasPages())
    <div class="dataTables_paginate paging_simple_numbers">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="paginate_button previous disabled">
                    <a aria-controls="datatable" tabindex="0">@lang('pagination.previous')</a>
                </li>
            @else
                <li class="paginate_button previous">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="paginate_button active">
                        <a tabindex="0">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="paginate_button active">
                                <a tabindex="0">{{ $page }}</a>
                            </li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="paginate_button next">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="">@lang('pagination.next')</a>
                </li>
            @else
                <li class="paginate_button next disabled">
                    <a aria-controls="datatable" tabindex="0">
                        @lang('pagination.next')
                    </a>
                </li>
            @endif
        </ul>
    </div>
@endif
