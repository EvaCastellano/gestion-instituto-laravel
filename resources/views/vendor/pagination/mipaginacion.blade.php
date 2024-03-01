@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center py-2 space-x-2">
        {{-- Previous Page --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-header border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-400 dark:bg-header dark:border-gray-600">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-white border border-gray-300 leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-header active:text-white transition ease-in-out duration-150 dark:bg-header dark:border-gray-600 dark:text-white dark:focus:border-blue-700 dark:active:bg-header dark:active:text-white">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-white border border-gray-300 leading-5 rounded-md hover:text-white focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-header active:text-white transition ease-in-out duration-150 dark:bg-header dark:border-gray-600 dark:text-white dark:focus:border-blue-700 dark:active:bg-header dark:active:text-white">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-white border border-gray-300 cursor-default leading-5 rounded-md dark:text-gray-400 dark:bg-header dark:border-gray-600">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
