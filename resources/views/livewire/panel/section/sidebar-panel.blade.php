<div>
    {{-- sidebar --}}
    <div class="right flex-20 scroller pt-10 pb-10 scroller-transparent  isDesktop">
        <div class="controller-aside">
            {{-- top --}}
            <div class="d-top">
                {{-- profile --}}
                <div class="p-profile d-flex flex-wrap align-items-center justify-content-start rtl pb-0">
                    {{-- detail profile --}}
                    <div class="d-flex align-items-center flex-direction-column">
                        <div class="image profile pl-10 pb-8">
                            <x-utils.icons icon="user" />
                            <div class="state bg-success" wire:offline.class.remove="bg-success"></div>
                        </div>
                    </div>
                    <div class="text px-2">
                        <h6 class="text-light">{{ user()->fullName ?? user()->username }}</h6>
                        <div class="text pos-relative">
                            <h6 class="text-color-parnas">{{ user()->role->label }}</h6>
                        </div>
                    </div>
                </div>
                {{-- local list --}}
                <div class="local-list pl-0 scroller">
                    <!--? controller backend loop data  -->
                    @foreach (collect($sidebars)->sortBy('order') as $sidebar)
                        <div class="data-l w-100 mb-7" x-data="{
                            show: true,
                            init() {
                                let activeLink = document.querySelector('.active-route')?.parentElement;

                                if (activeLink?.id === 'menu_' + @js($loop->index)) {
                                    this.show = true;

                                }
                            }
                        }">
                            <!--? title  -->
                            <div class="up rtl pt-15 pr-25" @click="show = !show">
                                <div class="text pb-7">
                                    <div
                                        class="d-flex justify-content-start m-left-auto pos-relative pr-10 cursor-pointer">
                                        <div
                                            class="w-100 d-flex justify-content-between align-items-start f-14 text-white">
                                            {{ $sidebar['title'] }}
                                            <div class="rx-title title-input pb-10">
                                                <div class="p-rx">
                                                    <div class="rx-border-rectangle-after label-input"></div>
                                                </div>
                                            </div>
                                            <div class="image ml-25" x-show="!show">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828"
                                                     viewBox="0 0 8.414 14.828">
                                                    <path id="Left_Arrow_1" data-name="Left Arrow 1" d="M7,13,1,7,7,1"
                                                          transform="translate(0 0.414)" fill="none" stroke="#fff"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" />
                                                </svg>
                                            </div>
                                            <div x-show="show">
                                                <div class="image pos-absolute left-32"
                                                     style="transform: rotate(-90deg);top: -3px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.414"
                                                         height="14.828" viewBox="0 0 8.414 14.828">
                                                        <path id="Left_Arrow_1" data-name="Left Arrow 1"
                                                              d="M7,13,1,7,7,1" transform="translate(0 0.414)"
                                                              fill="none" stroke="#fff" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--? items -->
                            <ul class="ul-list pt-3 pb-15" x-show="show" id="menu_{{ $loop->index }}"
                                x-collapse.duration.1000ms>
                                @foreach (collect($sidebar['links'])->sortBy('order') as $link)
                                    <!--? item -->
                                    @if (!is_null($link['can']) && $link['can'] != '')
                                        @can($link['can'])
                                            <li
                                                class="li-list d-flex align-content-center py-10 pos-relative {{ request()->routeIs($link['route_active'] ?? $link['route']) && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first())  ? 'active-route' : '' }}">
                                                {{-- !!noftication number --}}
                                                <a href="{{ \Illuminate\Support\Facades\Route::has($link['route']) ? route($link['route'] , $link['params'] ?? []) : $link['route'] }}"
                                                   wire:navigate
                                                   class="d-flex align-items-center {{ request()->routeIs($link['route_active'] ?? $link['route']) && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? '' : 'text-four-color' }}">
                                                    <div class="circle-box"></div>
                                                    {!! $link['icon'] !!}
                                                    {{ $link['title'] }}
                                                    @empty($link['notice'])
                                                    @else
                                                        <div class="data-badge d-flex align-items-center flex-direction-column flex-wrap">
                                                            <div class="c-data-badge d-flex justify-content-center align-items-center bg-success radius-5 ml-5 mb-3">
                                                                <span class="text-white f-9 pl-5">اعلان</span>
                                                                <span class="py-2 pl-10 text-white f-9">{{ $link['notice'] }}</span>
                                                            </div>
                                                        </div>
                                                    @endempty
                                                </a>
                                            </li>
                                        @endcan
                                    @else
                                        <li
                                            class="li-list d-flex align-content-center py-9 pos-relative {{ request()->routeIs($link['route_active'] ?? $link['route'])  && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? 'active-route' : '' }}">

                                            <a href="{{ \Illuminate\Support\Facades\Route::has($link['route']) ? route($link['route'] , $link['params'] ?? []) : $link['route'] }}"
                                               wire:navigate
                                               class="d-flex align-items-center {{ request()->routeIs($link['route_active'] ?? $link['route'] , $link['params'] ?? [])  && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? '' : 'text-four-color' }}">
                                                <div class="circle-box"></div>
                                                {!! $link['icon'] !!}
                                                {{ $link['title'] }}
                                                @empty($link['notice'])
                                                @else
                                                    <div class="data-badge d-flex align-items-center flex-direction-column flex-wrap">
                                                        <div class="c-data-badge d-flex justify-content-center align-items-center bg-success radius-5 ml-5 mb-3">
                                                            <span class="text-white f-9 pl-5">اعلان</span>
                                                            <span class="py-2 pl-10 text-white f-9">{{ $link['notice'] }}</span>
                                                        </div>
                                                    </div>
                                                @endempty
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex-100">
                {{-- management site --}}
                <div class="w-100 d-flex justify-content-between flex-direction-row">
                    <div class="d-flex align-items-start justify-content-center flex-direction-row-reverse w-100"
                         x-data="{
                      toggleSwitch: false,
                        currentTheme: null,
                        init() {

                            this.currentTheme = localStorage.getItem('data-theme')
                            if (this.currentTheme) {
                                document.documentElement.setAttribute('data-theme', this.currentTheme);
                                if (this.currentTheme === 'dark') {
                                    this.toggleSwitch = true;
                                }
                            }
                        },
                            toggleSetting() {
                                this.toggleSwitch = !this.toggleSwitch;
                                if (this.toggleSwitch) {
                                document.documentElement.setAttribute('data-theme', 'dark');
                                localStorage.setItem('data-theme', 'dark');
                                } else {
                                document.documentElement.setAttribute('data-theme', 'light');
                                localStorage.setItem('data-theme', 'light');
                                }
                            }
                        }">
                        <div class="exit tooltip d-flex align-items-center justify-content-center mr-3 ml-5 mb-10">
                            <a href="{{ route('panel.logout') }}"
                               class="d-flex align-items-center justify-content-center cursor-pointer radius-7">
                                <div
                                    class="d-flex align-items-center justify-content-center bg-danger radius-100 px-13 py-13">
                                    <svg id="Off" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                         viewBox="0 0 24 24">
                                        <rect id="Rectangle_187" data-name="Rectangle 187" width="10" height="2"
                                              rx="1" transform="translate(13) rotate(90)" fill="#fff" />
                                        <path id="Path_1070" data-name="Path 1070"
                                              d="M6,2.8A.892.892,0,0,0,4.628,2C1.654,4.009,0,7.453,0,12c0,7.5,4.5,12,12,12s12-4.5,12-12c0-4.547-1.654-7.991-4.628-10A.892.892,0,0,0,18,2.8V2.94a1.078,1.078,0,0,0,.461.865,7.691,7.691,0,0,1,.937.8C21,6.207,22,8.651,22,12s-1,5.793-2.6,7.4S15.349,22,12,22s-5.793-1-7.4-2.6S2,15.349,2,12,3,6.207,4.6,4.6a7.689,7.689,0,0,1,.937-.8A1.077,1.077,0,0,0,6,2.94Z"
                                              fill="#fff" fill-rule="evenodd" />
                                    </svg>
                                    <span class="s-tooltip pl-10">
                                        خروج از پنل
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="tooltip d-flex align-items-center justify-content-center mr-3 ml-5 mb-10">
                            <a href="/" target="_blank"
                               class="d-flex align-items-center justify-content-center cursor-pointer radius-7">
                                <div
                                    class="d-flex align-items-center justify-content-center bg-primary radius-100 px-10 py-10">
                                    <svg width="22" height="22" viewBox="0 0 31 31" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.4333 15.6532C19.4333 17.9267 17.5956 19.7655 15.3339 19.7655C13.0721 19.7655 11.2344 17.9267 11.2344 15.6532C11.2344 13.3798 13.0721 11.541 15.3339 11.541C17.5956 11.541 19.4333 13.3798 19.4333 15.6532Z"
                                            stroke="#fff" stroke-width="1" />
                                        <path
                                            d="M26.0082 14.5827C26.3908 15.0629 26.5821 15.3031 26.5821 15.6527C26.5821 16.0024 26.3908 16.2425 26.0082 16.7227C24.3283 18.8313 20.182 23.321 15.3332 23.321C10.4844 23.321 6.33814 18.8313 4.6582 16.7227C4.27562 16.2425 4.08432 16.0024 4.08432 15.6527C4.08432 15.3031 4.27562 15.0629 4.6582 14.5827C6.33814 12.4741 10.4844 7.98438 15.3332 7.98438C20.182 7.98438 24.3283 12.4741 26.0082 14.5827Z"
                                            stroke="#fff" stroke-width="1" />
                                    </svg>
                                    <span class="s-tooltip pl-10">
                                        مشاهده سایت
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="tooltip d-flex align-items-center justify-content-center mr-3 ml-5 mb-10">
                            <div class="image animation-rotate cursor-pointer" @click="toggleSetting()">
                                <div
                                    class="d-flex align-items-center justify-content-center bg-white radius-100 px-12 py-12">
                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none"
                                         x-show="toggleSwitch"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99975 9.807C8.74152 8.54828 7.88464 6.94484 7.53738 5.1993C7.19012 3.45375 7.36807 1.64444 8.04875 0C6.10801 0.382051 4.32535 1.33431 2.92875 2.735C-0.97625 6.64 -0.97625 12.972 2.92875 16.877C6.83475 20.783 13.1658 20.782 17.0718 16.877C18.4721 15.4805 19.4243 13.6983 19.8067 11.758C18.1623 12.4385 16.353 12.6164 14.6075 12.2692C12.862 11.9219 11.2585 11.0651 9.99975 9.807V9.807Z"
                                            stroke="#ca7e65" />
                                    </svg>
                                    <svg fill="#ca7e65" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"
                                         x-show="!toggleSwitch"
                                         width="18" height="18">
                                        <path
                                            d="M 24.90625 3.96875 C 24.863281 3.976563 24.820313 3.988281 24.78125 4 C 24.316406 4.105469 23.988281 4.523438 24 5 L 24 11 C 23.996094 11.359375 24.183594 11.695313 24.496094 11.878906 C 24.808594 12.058594 25.191406 12.058594 25.503906 11.878906 C 25.816406 11.695313 26.003906 11.359375 26 11 L 26 5 C 26.011719 4.710938 25.894531 4.433594 25.6875 4.238281 C 25.476563 4.039063 25.191406 3.941406 24.90625 3.96875 Z M 10.65625 9.84375 C 10.28125 9.910156 9.980469 10.183594 9.875 10.546875 C 9.769531 10.914063 9.878906 11.304688 10.15625 11.5625 L 14.40625 15.8125 C 14.648438 16.109375 15.035156 16.246094 15.410156 16.160156 C 15.78125 16.074219 16.074219 15.78125 16.160156 15.410156 C 16.246094 15.035156 16.109375 14.648438 15.8125 14.40625 L 11.5625 10.15625 C 11.355469 9.933594 11.054688 9.820313 10.75 9.84375 C 10.71875 9.84375 10.6875 9.84375 10.65625 9.84375 Z M 39.03125 9.84375 C 38.804688 9.875 38.59375 9.988281 38.4375 10.15625 L 34.1875 14.40625 C 33.890625 14.648438 33.753906 15.035156 33.839844 15.410156 C 33.925781 15.78125 34.21875 16.074219 34.589844 16.160156 C 34.964844 16.246094 35.351563 16.109375 35.59375 15.8125 L 39.84375 11.5625 C 40.15625 11.265625 40.246094 10.800781 40.0625 10.410156 C 39.875 10.015625 39.460938 9.789063 39.03125 9.84375 Z M 24.90625 15 C 24.875 15.007813 24.84375 15.019531 24.8125 15.03125 C 24.75 15.035156 24.6875 15.046875 24.625 15.0625 C 24.613281 15.074219 24.605469 15.082031 24.59375 15.09375 C 19.289063 15.320313 15 19.640625 15 25 C 15 30.503906 19.496094 35 25 35 C 30.503906 35 35 30.503906 35 25 C 35 19.660156 30.746094 15.355469 25.46875 15.09375 C 25.433594 15.09375 25.410156 15.0625 25.375 15.0625 C 25.273438 15.023438 25.167969 15.003906 25.0625 15 C 25.042969 15 25.019531 15 25 15 C 24.96875 15 24.9375 15 24.90625 15 Z M 24.9375 17 C 24.957031 17 24.980469 17 25 17 C 25.03125 17 25.0625 17 25.09375 17 C 29.46875 17.050781 33 20.613281 33 25 C 33 29.421875 29.421875 33 25 33 C 20.582031 33 17 29.421875 17 25 C 17 20.601563 20.546875 17.035156 24.9375 17 Z M 4.71875 24 C 4.167969 24.078125 3.78125 24.589844 3.859375 25.140625 C 3.9375 25.691406 4.449219 26.078125 5 26 L 11 26 C 11.359375 26.003906 11.695313 25.816406 11.878906 25.503906 C 12.058594 25.191406 12.058594 24.808594 11.878906 24.496094 C 11.695313 24.183594 11.359375 23.996094 11 24 L 5 24 C 4.96875 24 4.9375 24 4.90625 24 C 4.875 24 4.84375 24 4.8125 24 C 4.78125 24 4.75 24 4.71875 24 Z M 38.71875 24 C 38.167969 24.078125 37.78125 24.589844 37.859375 25.140625 C 37.9375 25.691406 38.449219 26.078125 39 26 L 45 26 C 45.359375 26.003906 45.695313 25.816406 45.878906 25.503906 C 46.058594 25.191406 46.058594 24.808594 45.878906 24.496094 C 45.695313 24.183594 45.359375 23.996094 45 24 L 39 24 C 38.96875 24 38.9375 24 38.90625 24 C 38.875 24 38.84375 24 38.8125 24 C 38.78125 24 38.75 24 38.71875 24 Z M 15 33.875 C 14.773438 33.90625 14.5625 34.019531 14.40625 34.1875 L 10.15625 38.4375 C 9.859375 38.679688 9.722656 39.066406 9.808594 39.441406 C 9.894531 39.8125 10.1875 40.105469 10.558594 40.191406 C 10.933594 40.277344 11.320313 40.140625 11.5625 39.84375 L 15.8125 35.59375 C 16.109375 35.308594 16.199219 34.867188 16.039063 34.488281 C 15.882813 34.109375 15.503906 33.867188 15.09375 33.875 C 15.0625 33.875 15.03125 33.875 15 33.875 Z M 34.6875 33.875 C 34.3125 33.941406 34.011719 34.214844 33.90625 34.578125 C 33.800781 34.945313 33.910156 35.335938 34.1875 35.59375 L 38.4375 39.84375 C 38.679688 40.140625 39.066406 40.277344 39.441406 40.191406 C 39.8125 40.105469 40.105469 39.8125 40.191406 39.441406 C 40.277344 39.066406 40.140625 38.679688 39.84375 38.4375 L 35.59375 34.1875 C 35.40625 33.988281 35.148438 33.878906 34.875 33.875 C 34.84375 33.875 34.8125 33.875 34.78125 33.875 C 34.75 33.875 34.71875 33.875 34.6875 33.875 Z M 24.90625 37.96875 C 24.863281 37.976563 24.820313 37.988281 24.78125 38 C 24.316406 38.105469 23.988281 38.523438 24 39 L 24 45 C 23.996094 45.359375 24.183594 45.695313 24.496094 45.878906 C 24.808594 46.058594 25.191406 46.058594 25.503906 45.878906 C 25.816406 45.695313 26.003906 45.359375 26 45 L 26 39 C 26.011719 38.710938 25.894531 38.433594 25.6875 38.238281 C 25.476563 38.039063 25.191406 37.941406 24.90625 37.96875 Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- sidebar taskbar --}}
{{--    <div class="isDesktop">--}}
{{--        --}}{{-- taskbar --}}
{{--        <div class="sidebar-taskbar pos-relative" x-data="{--}}
{{--            taskbarData() {--}}
{{--                $('.sidebar-taskbar').toggleClass('animatetaskbar');--}}
{{--                $('.show-taskbar').fadeIn();--}}
{{--                $('.left').removeClass('pb-70');--}}
{{--            }--}}
{{--        }">--}}
{{--            <div class="flex-100 d-flex align-items-center justify-content-center">--}}
{{--                <div class="flex-100">--}}
{{--                    --}}{{-- local list --}}
{{--                    <div class="pl-0 scroller">--}}
{{--                        --}}{{-- controller backend loop data --}}
{{--                        <div class="w-100">--}}
{{--                            --}}{{-- items --}}
{{--                            <ul class="ul-list d-flex align-items-center justify-content-center overflow-y-hidden">--}}
{{--                                @foreach (call_user_func_array(--}}
{{--        'array_merge',--}}
{{--        collect($sidebars)->pluck('links')->sortBy('order')->toArray(),--}}
{{--    ) as $sidebar)--}}
{{--                                    --}}{{-- items --}}
{{--                                    @if (!is_null($sidebar['can']) && $sidebar['can'] != '')--}}
{{--                                        @can($sidebar['can'])--}}
{{--                                            <li--}}
{{--                                                class="li-list tooltip d-flex align-content-center justify-content-center tooltip py-9 {{ (\Illuminate\Support\Facades\Route::currentRouteName() == $sidebar['route'])  && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? 'active-sidebar' : '' }}">--}}
{{--                                                @if (isset($sidebar['notification']))--}}
{{--                                                    <div class="data-badge d-flex align-items-center justify-content-center flex-direction-column flex-wrap"--}}
{{--                                                         x-data="{--}}
{{--                                                            notify: @entangle($sidebar['notification']).live,--}}
{{--                                                            show: false,--}}
{{--                                                            init() {--}}
{{--                                                                this.show = this.notify > 0--}}
{{--                                                            }--}}
{{--                                                        }">--}}
{{--                                                        <template x-if="show">--}}
{{--                                                            <div--}}
{{--                                                                class="c-data-badge d-flex justify-content-center align-items-center bg-success radius-5 ml-5 mb-3">--}}
{{--                                                                <span class="text-white f-9 pl-5">اعلان</span>--}}
{{--                                                                <span class="py-2 pl-10 text-white f-9"--}}
{{--                                                                      x-text="notify"></span>--}}
{{--                                                            </div>--}}
{{--                                                        </template>--}}
{{--                                                    </div>--}}
{{--                                                @endif--}}
{{--                                                <a href="{{ \Illuminate\Support\Facades\Route::has($sidebar['route']) ? route($sidebar['route'] , $sidebar['params'] ?? []) : $sidebar['route'] }}"--}}
{{--                                                   wire:navigate--}}
{{--                                                   class="d-flex align-items-center justify-content-center {{ request()->routeIs($sidebar['route_active'] ?? $sidebar['route'])  && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? '' : 'text-white' }}">--}}
{{--                                                    {!! $sidebar['icon'] !!}--}}
{{--                                                    --}}{{-- {{ $sidebar['titlpy-9e'] }} --}}
{{--                                                    <div class="s-tooltip" style="left: 35px;top:12px">--}}
{{--                                                        <span class="f-14">--}}
{{--                                                            {{ $sidebar['title'] }}--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        @endcan--}}
{{--                                    @else--}}
{{--                                        <li--}}
{{--                                            class="li-list tooltip d-flex align-content-center justify-content-center tooltip py-9 {{ request()->routeIs($link['route_active'] ?? $link['route']) && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? 'active-sidebar' : '' }}">--}}
{{--                                            @if (isset($sidebar['notification']))--}}
{{--                                                <div class="data-badge d-flex align-items-center justify-content-center flex-direction-column flex-wrap"--}}
{{--                                                     x-data="{--}}
{{--                                                        notify: @entangle($sidebar['notification']).live,--}}
{{--                                                        show: false,--}}
{{--                                                        init() {--}}
{{--                                                            this.show = this.notify > 0--}}
{{--                                                        }--}}
{{--                                                    }">--}}
{{--                                                    <template x-if="show">--}}
{{--                                                        <div class="rx-title title-input pb-10">--}}
{{--                                                            <div class="p-rx">--}}
{{--                                                                <div class="rx-border-rectangle-after label-input">--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </template>--}}
{{--                                                </div>--}}
{{--                                            @endif--}}
{{--                                            <a href="{{ \Illuminate\Support\Facades\Route::has($sidebar['route']) ? route($sidebar['route'] , $sidebar['params'] ?? []) : $sidebar['route'] }}"--}}
{{--                                               wire:navigate--}}
{{--                                               class="d-flex align-items-center justify-content-center {{ request()->routeIs($sidebar['route_active'] ?? $sidebar['route'])  && (!isset($link['params']) || request(array_key_first($link['params'])) == collect($link['params'])->first()) ? '' : 'text-white' }}">--}}
{{--                                                {!! $sidebar['icon'] !!}--}}
{{--                                            </a>--}}
{{--                                            --}}{{-- <div class="s-tooltip bottom_tooltip">--}}
{{--                                    <span class="f-9">--}}
{{--                                        {{ $sidebar['title'] }}--}}
{{--                                    </span>--}}
{{--                                </div> --}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="toggle-taskbar pos-absolute cursor-pointer" style="top: 17px;left: -13px;">--}}
{{--                    <div class="image d-flex align-items-center bg-pallete-1 radius-50 border-solid-2 border-light px-8 py-8"--}}
{{--                         @click="taskbarData()">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"--}}
{{--                             viewBox="0 0 14.828 8.414">--}}
{{--                            <path id="Down_Arrow_1" data-name="Down Arrow 1" d="M13,1,7,7,1,1"--}}
{{--                                  transform="translate(0.414 0.414)" fill="none" stroke="#fff"--}}
{{--                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pos-absolute right-10 bottom-0">--}}
{{--                    --}}{{-- parent --}}
{{--                    <div class="d-flex align-items-center" x-data="{--}}
{{--                      toggleSwitch: false,--}}
{{--                        currentTheme: document.getElementById('data-theme'),--}}
{{--                        init() {--}}
{{--                                        if (this.currentTheme) {--}}
{{--                                document.documentElement.setAttribute('data-theme', this.currentTheme);--}}
{{--                                if (currentTheme === 'dark') {--}}
{{--                                    this.toggleSwitch = true;--}}
{{--                                }--}}
{{--                            }--}}
{{--                        },--}}
{{--                            toggleSetting() {--}}
{{--                                if (this.toggleSwitch) {--}}
{{--                                document.documentElement.setAttribute('data-theme', 'dark');--}}
{{--                                localStorage.setItem('data-theme', 'dark');--}}
{{--                                } else {--}}
{{--                                document.documentElement.setAttribute('data-theme', 'light');--}}
{{--                                localStorage.setItem('data-theme', 'light');--}}
{{--                                }--}}
{{--                            }--}}
{{--                        }">--}}
{{--                        --}}{{-- child button --}}
{{--                        <div class="exit tooltip d-flex align-items-center justify-content-center mr-3 ml-5 mb-10">--}}
{{--                            <a href="{{ route('panel.logout') }}"--}}
{{--                               class="d-flex align-items-center justify-content-center cursor-pointer radius-7">--}}
{{--                                <div--}}
{{--                                    class="d-flex align-items-center justify-content-center bg-danger radius-15 px-13 py-13">--}}
{{--                                    <svg id="Off" xmlns="http://www.w3.org/2000/svg" width="15" height="15"--}}
{{--                                         viewBox="0 0 24 24">--}}
{{--                                        <rect id="Rectangle_187" data-name="Rectangle 187" width="10" height="2"--}}
{{--                                              rx="1" transform="translate(13) rotate(90)" fill="#fff" />--}}
{{--                                        <path id="Path_1070" data-name="Path 1070"--}}
{{--                                              d="M6,2.8A.892.892,0,0,0,4.628,2C1.654,4.009,0,7.453,0,12c0,7.5,4.5,12,12,12s12-4.5,12-12c0-4.547-1.654-7.991-4.628-10A.892.892,0,0,0,18,2.8V2.94a1.078,1.078,0,0,0,.461.865,7.691,7.691,0,0,1,.937.8C21,6.207,22,8.651,22,12s-1,5.793-2.6,7.4S15.349,22,12,22s-5.793-1-7.4-2.6S2,15.349,2,12,3,6.207,4.6,4.6a7.689,7.689,0,0,1,.937-.8A1.077,1.077,0,0,0,6,2.94Z"--}}
{{--                                              fill="#fff" fill-rule="evenodd" />--}}
{{--                                    </svg>--}}
{{--                                    <span class="s-tooltip pl-10">--}}
{{--                                        خروج از پنل--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        --}}{{-- child button --}}
{{--                        <div class="tooltip d-flex align-items-center justify-content-center mr-3 ml-5 mb-10">--}}
{{--                            <a href="/" target="_blank"--}}
{{--                               class="d-flex align-items-center justify-content-center cursor-pointer radius-7">--}}
{{--                                <div--}}
{{--                                    class="d-flex align-items-center justify-content-center bg-primary radius-15 px-10 py-10">--}}
{{--                                    <svg width="22" height="22" viewBox="0 0 31 31" fill="none"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M19.4333 15.6532C19.4333 17.9267 17.5956 19.7655 15.3339 19.7655C13.0721 19.7655 11.2344 17.9267 11.2344 15.6532C11.2344 13.3798 13.0721 11.541 15.3339 11.541C17.5956 11.541 19.4333 13.3798 19.4333 15.6532Z"--}}
{{--                                            stroke="#fff" stroke-width="1" />--}}
{{--                                        <path--}}
{{--                                            d="M26.0082 14.5827C26.3908 15.0629 26.5821 15.3031 26.5821 15.6527C26.5821 16.0024 26.3908 16.2425 26.0082 16.7227C24.3283 18.8313 20.182 23.321 15.3332 23.321C10.4844 23.321 6.33814 18.8313 4.6582 16.7227C4.27562 16.2425 4.08432 16.0024 4.08432 15.6527C4.08432 15.3031 4.27562 15.0629 4.6582 14.5827C6.33814 12.4741 10.4844 7.98438 15.3332 7.98438C20.182 7.98438 24.3283 12.4741 26.0082 14.5827Z"--}}
{{--                                            stroke="#fff" stroke-width="1" />--}}
{{--                                    </svg>--}}
{{--                                    <span class="s-tooltip pl-10">--}}
{{--                                        مشاهده سایت--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        --}}{{-- child button --}}
{{--                        <div class="tooltip d-flex align-items-center justify-content-center mr-3 ml-5 mb-10">--}}
{{--                            <div class="image cursor-pointer" @click="toggleSetting()">--}}
{{--                                <div--}}
{{--                                    class="d-flex align-items-center justify-content-center bg-warning radius-15 px-12 py-12">--}}
{{--                                    <svg width="18" height="18" viewBox="0 0 20 20" fill="none"--}}
{{--                                         x-show="toggleSwitch" style="display: none"--}}
{{--                                         xmlns="http://www.w3.org/2000/svg">--}}
{{--                                        <path--}}
{{--                                            d="M9.99975 9.807C8.74152 8.54828 7.88464 6.94484 7.53738 5.1993C7.19012 3.45375 7.36807 1.64444 8.04875 0C6.10801 0.382051 4.32535 1.33431 2.92875 2.735C-0.97625 6.64 -0.97625 12.972 2.92875 16.877C6.83475 20.783 13.1658 20.782 17.0718 16.877C18.4721 15.4805 19.4243 13.6983 19.8067 11.758C18.1623 12.4385 16.353 12.6164 14.6075 12.2692C12.862 11.9219 11.2585 11.0651 9.99975 9.807V9.807Z"--}}
{{--                                            stroke="#ca7e65" />--}}
{{--                                    </svg>--}}
{{--                                    <svg fill="#ca7e65" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50"--}}
{{--                                         x-show="!toggleSwitch"--}}
{{--                                         width="18" height="18">--}}
{{--                                        <path--}}
{{--                                            d="M 24.90625 3.96875 C 24.863281 3.976563 24.820313 3.988281 24.78125 4 C 24.316406 4.105469 23.988281 4.523438 24 5 L 24 11 C 23.996094 11.359375 24.183594 11.695313 24.496094 11.878906 C 24.808594 12.058594 25.191406 12.058594 25.503906 11.878906 C 25.816406 11.695313 26.003906 11.359375 26 11 L 26 5 C 26.011719 4.710938 25.894531 4.433594 25.6875 4.238281 C 25.476563 4.039063 25.191406 3.941406 24.90625 3.96875 Z M 10.65625 9.84375 C 10.28125 9.910156 9.980469 10.183594 9.875 10.546875 C 9.769531 10.914063 9.878906 11.304688 10.15625 11.5625 L 14.40625 15.8125 C 14.648438 16.109375 15.035156 16.246094 15.410156 16.160156 C 15.78125 16.074219 16.074219 15.78125 16.160156 15.410156 C 16.246094 15.035156 16.109375 14.648438 15.8125 14.40625 L 11.5625 10.15625 C 11.355469 9.933594 11.054688 9.820313 10.75 9.84375 C 10.71875 9.84375 10.6875 9.84375 10.65625 9.84375 Z M 39.03125 9.84375 C 38.804688 9.875 38.59375 9.988281 38.4375 10.15625 L 34.1875 14.40625 C 33.890625 14.648438 33.753906 15.035156 33.839844 15.410156 C 33.925781 15.78125 34.21875 16.074219 34.589844 16.160156 C 34.964844 16.246094 35.351563 16.109375 35.59375 15.8125 L 39.84375 11.5625 C 40.15625 11.265625 40.246094 10.800781 40.0625 10.410156 C 39.875 10.015625 39.460938 9.789063 39.03125 9.84375 Z M 24.90625 15 C 24.875 15.007813 24.84375 15.019531 24.8125 15.03125 C 24.75 15.035156 24.6875 15.046875 24.625 15.0625 C 24.613281 15.074219 24.605469 15.082031 24.59375 15.09375 C 19.289063 15.320313 15 19.640625 15 25 C 15 30.503906 19.496094 35 25 35 C 30.503906 35 35 30.503906 35 25 C 35 19.660156 30.746094 15.355469 25.46875 15.09375 C 25.433594 15.09375 25.410156 15.0625 25.375 15.0625 C 25.273438 15.023438 25.167969 15.003906 25.0625 15 C 25.042969 15 25.019531 15 25 15 C 24.96875 15 24.9375 15 24.90625 15 Z M 24.9375 17 C 24.957031 17 24.980469 17 25 17 C 25.03125 17 25.0625 17 25.09375 17 C 29.46875 17.050781 33 20.613281 33 25 C 33 29.421875 29.421875 33 25 33 C 20.582031 33 17 29.421875 17 25 C 17 20.601563 20.546875 17.035156 24.9375 17 Z M 4.71875 24 C 4.167969 24.078125 3.78125 24.589844 3.859375 25.140625 C 3.9375 25.691406 4.449219 26.078125 5 26 L 11 26 C 11.359375 26.003906 11.695313 25.816406 11.878906 25.503906 C 12.058594 25.191406 12.058594 24.808594 11.878906 24.496094 C 11.695313 24.183594 11.359375 23.996094 11 24 L 5 24 C 4.96875 24 4.9375 24 4.90625 24 C 4.875 24 4.84375 24 4.8125 24 C 4.78125 24 4.75 24 4.71875 24 Z M 38.71875 24 C 38.167969 24.078125 37.78125 24.589844 37.859375 25.140625 C 37.9375 25.691406 38.449219 26.078125 39 26 L 45 26 C 45.359375 26.003906 45.695313 25.816406 45.878906 25.503906 C 46.058594 25.191406 46.058594 24.808594 45.878906 24.496094 C 45.695313 24.183594 45.359375 23.996094 45 24 L 39 24 C 38.96875 24 38.9375 24 38.90625 24 C 38.875 24 38.84375 24 38.8125 24 C 38.78125 24 38.75 24 38.71875 24 Z M 15 33.875 C 14.773438 33.90625 14.5625 34.019531 14.40625 34.1875 L 10.15625 38.4375 C 9.859375 38.679688 9.722656 39.066406 9.808594 39.441406 C 9.894531 39.8125 10.1875 40.105469 10.558594 40.191406 C 10.933594 40.277344 11.320313 40.140625 11.5625 39.84375 L 15.8125 35.59375 C 16.109375 35.308594 16.199219 34.867188 16.039063 34.488281 C 15.882813 34.109375 15.503906 33.867188 15.09375 33.875 C 15.0625 33.875 15.03125 33.875 15 33.875 Z M 34.6875 33.875 C 34.3125 33.941406 34.011719 34.214844 33.90625 34.578125 C 33.800781 34.945313 33.910156 35.335938 34.1875 35.59375 L 38.4375 39.84375 C 38.679688 40.140625 39.066406 40.277344 39.441406 40.191406 C 39.8125 40.105469 40.105469 39.8125 40.191406 39.441406 C 40.277344 39.066406 40.140625 38.679688 39.84375 38.4375 L 35.59375 34.1875 C 35.40625 33.988281 35.148438 33.878906 34.875 33.875 C 34.84375 33.875 34.8125 33.875 34.78125 33.875 C 34.75 33.875 34.71875 33.875 34.6875 33.875 Z M 24.90625 37.96875 C 24.863281 37.976563 24.820313 37.988281 24.78125 38 C 24.316406 38.105469 23.988281 38.523438 24 39 L 24 45 C 23.996094 45.359375 24.183594 45.695313 24.496094 45.878906 C 24.808594 46.058594 25.191406 46.058594 25.503906 45.878906 C 25.816406 45.695313 26.003906 45.359375 26 45 L 26 39 C 26.011719 38.710938 25.894531 38.433594 25.6875 38.238281 C 25.476563 38.039063 25.191406 37.941406 24.90625 37.96875 Z" />--}}
{{--                                    </svg>--}}
{{--                                    <svg class="animation-rotate" id="Settings" xmlns="http://www.w3.org/2000/svg" width="18"--}}
{{--                                         height="18" viewBox="0 0 22 24">--}}
{{--                                        <path id="Path_663" data-name="Path 663"--}}
{{--                                              d="M6.606,3.656a.473.473,0,0,1-.622.362,4.475,4.475,0,0,0-4.395,7.621.478.478,0,0,1,0,.725,4.475,4.475,0,0,0,4.395,7.621.473.473,0,0,1,.622.362,4.468,4.468,0,0,0,8.787,0,.473.473,0,0,1,.622-.362,4.475,4.475,0,0,0,4.395-7.621.478.478,0,0,1,0-.725,4.475,4.475,0,0,0-4.395-7.621.473.473,0,0,1-.622-.362A4.468,4.468,0,0,0,6.606,3.656Zm1.964.366a2.471,2.471,0,0,1,4.859,0A2.471,2.471,0,0,0,16.681,5.9a2.475,2.475,0,0,1,2.429,4.216,2.479,2.479,0,0,0,0,3.762A2.475,2.475,0,0,1,16.681,18.1a2.471,2.471,0,0,0-3.252,1.881,2.471,2.471,0,0,1-4.859,0A2.471,2.471,0,0,0,5.319,18.1a2.475,2.475,0,0,1-2.429-4.216,2.479,2.479,0,0,0,0-3.762A2.475,2.475,0,0,1,5.319,5.9,2.471,2.471,0,0,0,8.571,4.022Z"--}}
{{--                                              fill="#fff" fill-rule="evenodd" />--}}
{{--                                        <path id="Path_664" data-name="Path 664"--}}
{{--                                              d="M7,12a4,4,0,1,0,4-4A4,4,0,0,0,7,12Zm2,0a2,2,0,1,0,2-2A2,2,0,0,0,9,12Z"--}}
{{--                                              fill="#fff" fill-rule="evenodd" />--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="show-taskbar pos-absolute left-25 bottom-5 cursor-pointer" style="display: none;z-index: 70"--}}
{{--             x-data="{--}}
{{--                showTaskbar() {--}}
{{--                    $('.sidebar-taskbar').toggleClass('animatetaskbar');--}}
{{--                    $('.show-taskbar').fadeOut();--}}
{{--                    $('.left').addClass('pb-70');--}}
{{--                }--}}
{{--            }">--}}
{{--            <div class="mini-sidebar image d-flex align-items-center justify-content-center bg-pallete-1 radius-50 px-10 py-9 border-solid-2 border-light"--}}
{{--                 @click="showTaskbar()">--}}
{{--                <svg width="14" height="14" viewBox="0 0 34 20" fill="none"--}}
{{--                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path--}}
{{--                        d="M1.7 0C1.36377 0 1.0351 0.0977484 0.755532 0.280884C0.475968 0.46402 0.258075 0.724318 0.129406 1.02886C0.000736579 1.3334 -0.0329291 1.66852 0.0326658 1.99182C0.0982607 2.31512 0.26017 2.61209 0.497919 2.84518C0.735669 3.07826 1.03858 3.237 1.36835 3.30131C1.69812 3.36562 2.03993 3.33261 2.35056 3.20647C2.6612 3.08032 2.9267 2.8667 3.1135 2.59262C3.3003 2.31853 3.4 1.9963 3.4 1.66667C3.4 1.22464 3.22089 0.800716 2.90208 0.488156C2.58327 0.175595 2.15087 0 1.7 0ZM8.5 3.33333H32.3C32.7509 3.33333 33.1833 3.15774 33.5021 2.84518C33.8209 2.53262 34 2.10869 34 1.66667C34 1.22464 33.8209 0.800716 33.5021 0.488156C33.1833 0.175595 32.7509 0 32.3 0H8.5C8.04913 0 7.61673 0.175595 7.29792 0.488156C6.97911 0.800716 6.8 1.22464 6.8 1.66667C6.8 2.10869 6.97911 2.53262 7.29792 2.84518C7.61673 3.15774 8.04913 3.33333 8.5 3.33333ZM8.5 8.33333C8.16377 8.33333 7.8351 8.43108 7.55553 8.61422C7.27597 8.79735 7.05807 9.05765 6.92941 9.36219C6.80074 9.66674 6.76707 10.0018 6.83267 10.3251C6.89826 10.6485 7.06017 10.9454 7.29792 11.1785C7.53567 11.4116 7.83858 11.5703 8.16835 11.6346C8.49812 11.699 8.83993 11.6659 9.15056 11.5398C9.4612 11.4137 9.7267 11.2 9.9135 10.926C10.1003 10.6519 10.2 10.3296 10.2 10C10.2 9.55797 10.0209 9.13405 9.70208 8.82149C9.38327 8.50893 8.95087 8.33333 8.5 8.33333ZM15.3 16.6667C14.9638 16.6667 14.6351 16.7644 14.3555 16.9475C14.076 17.1307 13.8581 17.391 13.7294 17.6955C13.6007 18.0001 13.5671 18.3352 13.6327 18.6585C13.6983 18.9818 13.8602 19.2788 14.0979 19.5118C14.3357 19.7449 14.6386 19.9037 14.9683 19.968C15.2981 20.0323 15.6399 19.9993 15.9506 19.8731C16.2612 19.747 16.5267 19.5334 16.7135 19.2593C16.9003 18.9852 17 18.663 17 18.3333C17 17.8913 16.8209 17.4674 16.5021 17.1548C16.1833 16.8423 15.7509 16.6667 15.3 16.6667ZM32.3 8.33333H15.3C14.8491 8.33333 14.4167 8.50893 14.0979 8.82149C13.7791 9.13405 13.6 9.55797 13.6 10C13.6 10.442 13.7791 10.8659 14.0979 11.1785C14.4167 11.4911 14.8491 11.6667 15.3 11.6667H32.3C32.7509 11.6667 33.1833 11.4911 33.5021 11.1785C33.8209 10.8659 34 10.442 34 10C34 9.55797 33.8209 9.13405 33.5021 8.82149C33.1833 8.50893 32.7509 8.33333 32.3 8.33333ZM32.3 16.6667H22.1C21.6491 16.6667 21.2167 16.8423 20.8979 17.1548C20.5791 17.4674 20.4 17.8913 20.4 18.3333C20.4 18.7754 20.5791 19.1993 20.8979 19.5118C21.2167 19.8244 21.6491 20 22.1 20H32.3C32.7509 20 33.1833 19.8244 33.5021 19.5118C33.8209 19.1993 34 18.7754 34 18.3333C34 17.8913 33.8209 17.4674 33.5021 17.1548C33.1833 16.8423 32.7509 16.6667 32.3 16.6667Z"--}}
{{--                        fill="#fff" fill-opacity="1"></path>--}}
{{--                </svg>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
