@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="d-flex flex-column items-center w-100p mt-40">
        <div class="d-flex justify-content-sb flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="fs-24 fw-500 color-grey">
                    Предыдущая
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="fs-24 fw-500 color-dark-green">
                    Предыдущая
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="fs-24 fw-500 color-dark-green">
                    Следующая
                </a>
            @else
                <span class="fs-24 fw-500 color-grey">
                    Следующая
                </span>
            @endif
        </div>

        <div class="mt-20">
            <div>
                <p class="fs-22 fw-500">
                    Результаты с
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        по
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    из
                    <span class="font-medium">{{ $paginator->total() }}</span>

                </p>
            </div>
        </div>
    </nav>
@endif
