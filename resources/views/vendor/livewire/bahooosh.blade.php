@php
    if (! isset($scrollTo)) {
        $scrollTo = 'body';
    }

    $scrollIntoViewJsSnippet = ($scrollTo !== false)
        ? <<<JS
           (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
        JS
        : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <div class="row-pagination gap-4 w-full mt-16 flex justify-center items-center">
            @if ($paginator->onFirstPage())
                <button class="prev-page" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 45 45">
                        <rect width="45" height="45" rx="15"/>
                        <path d="M0,4.418,4.418,0m0,0V14.138M4.418,0,8.836,4.418"
                              transform="translate(29.78 18.557) rotate(90)" fill="none" stroke="#fff"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </button>
            @else
                <button class="prev-page" type="button"
                        wire:click="previousPage('{{ $paginator->getPageName() }}')"
                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                        x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 45 45">
                        <rect width="45" height="45" rx="15"/>
                        <path d="M0,4.418,4.418,0m0,0V14.138M4.418,0,8.836,4.418"
                              transform="translate(29.78 18.557) rotate(90)" fill="none" stroke="#fff"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </button>
            @endif
            <div class="pages gap-4 w-full flex justify-center items-center">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <button class="page bolX" type="button">{{$element}}</button>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if( $page == $paginator->currentPage())
                                <button wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}" class="page active-page bolX">
                                    {{ $page }}
                                </button>
                            @else
                                <button wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}" class="page bolX"
                                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                        aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                                >
                                    {{ $page }}
                                </button>
                            @endif

                        @endforeach
                    @endif
                @endforeach
            </div>
            @if ($paginator->hasMorePages())
                <button class="next-page" type="button"
                        wire:click="nextPage('{{ $paginator->getPageName() }}')"
                        x-on:click="{{ $scrollIntoViewJsSnippet }}"
                        dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                >
                    <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                         viewBox="0 0 45 45">
                        <rect width="45" height="45" rx="15"/>
                        <path d="M0,4.418,4.418,0m0,0V14.138M4.418,0,8.836,4.418"
                              transform="translate(29.78 18.557) rotate(90)" fill="none" stroke="#fff"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </button>
            @else
                <button class="next-page" type="button">
                    <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                         viewBox="0 0 45 45">
                        <rect width="45" height="45" rx="15"/>
                        <path d="M0,4.418,4.418,0m0,0V14.138M4.418,0,8.836,4.418"
                              transform="translate(29.78 18.557) rotate(90)" fill="none" stroke="#fff"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </button>
            @endif
        </div>
    @endif
</div>
