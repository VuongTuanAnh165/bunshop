@if ($paginator->hasPages())
    <ul class="wg-pagination">
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <a href="#"><i class="icon-chevron-left"></i></a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}">
                    <i class="icon-chevron-left"></i>
                </a>
            </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled"><a href="#">{{ $element }}</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active">
                            <a href="javascript:void(0)">{{ $page }}</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}">
                    <i class="icon-chevron-right"></i>
                </a>
            </li>
        @else
            <li class="disabled">
                <a href="#">
                    <i class="icon-chevron-right"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
