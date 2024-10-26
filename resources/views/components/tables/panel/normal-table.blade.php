@props(['columns' => [] , 'data' => []])
@php($perPages = [15 , 30 , 45 , 50])
<div class="controller-table scroller pr-3 my-15">
    <div class="d-thead">
        @foreach($columns as $column)
            <div class="head {{ $column['class'] }}">
                @if($column['type'] == 'component' && empty($column['title']))
                    <x-dynamic-component :component="$column['component']" wire:click="selectAll('{{ $data->pluck('id')->toJson() }}')" />
                @else
                    <span class="f-14 f-bold">{{ __($column['title']) }}</span>
                @endif
            </div>
        @endforeach
    </div>
    <div class="data" >
        @forelse($data as $item)
            <div class="d-detail">
                @foreach($columns as $column)
                    <div class="detail {{ $column['class'] }}">
                        @if($column['type'] == 'component')
                            <x-dynamic-component :component="$column['component']"
                                                 wire:model="{{ $column['wireModel'] ?? '' }}"
                                                 value="{{ $column['key'] instanceof Closure ? $column['key']($item) : $item->{$column['key']} }}"
                                                 :actions="$column['actions']"
                                                 :model="$item"
                                                 :trashed="method_exists($item , 'trashed') ? $item?->trashed() : false"
                            />
                        @elseif($column['type'] == 'select-component')
                            <x-dynamic-component :component="$column['component']"
                                                 :model="$item"
                                                 value="{{ $column['key'] instanceof Closure ? $column['key']($item) : $item->{$column['key']} }}"
                                                 :eventName="$column['eventName']"
                                                 :options="$column['options']"

                            />
                        @else
                            @if (($column['trash'] instanceof Closure && $column['trash']($item)) || empty($column['href'] ?? null))
                                <span class="f-14 px-5 text-align-right pb-3">{{ $column['key'] instanceof Closure ? $column['key']($item) : $item->{$column['key']} }}</span>
                            @else
                                <a class="f-13 text-info px-5 text-align-right pb-3"
                                   target="_blank"
                                   href="{{ $column['href'] instanceof Closure ? $column['href']($item) : $column['href'] }}"
                                   style="border-bottom: 1px dashed #17a2b8">{{ $column['key'] instanceof Closure ? $column['key']($item) : $item->{$column['key']} }}</a>
                            @endif
                        @endif
                    </div>
                @endforeach
            </div>
        @empty
{{--            @if ($readyToLoad)--}}
                <div class="empty-data">
                    <div
                        class="main-empty d-flex flex-direction-column align-items-center">
                        <div class="image">
                            <svg width="250" height="250" viewBox="0 0 250 200"
                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M207 65C210.866 65 214 68.134 214 72C214 75.866 210.866 79 207 79H167C170.866 79 174 82.134 174 86C174 89.866 170.866 93 167 93H189C192.866 93 196 96.134 196 100C196 103.866 192.866 107 189 107H178.826C173.952 107 170 110.134 170 114C170 116.577 172 118.911 176 121C179.866 121 183 124.134 183 128C183 131.866 179.866 135 176 135H93C89.134 135 86 131.866 86 128C86 124.134 89.134 121 93 121H54C50.134 121 47 117.866 47 114C47 110.134 50.134 107 54 107H94C97.866 107 101 103.866 101 100C101 96.134 97.866 93 94 93H69C65.134 93 62 89.866 62 86C62 82.134 65.134 79 69 79H109C105.134 79 102 75.866 102 72C102 68.134 105.134 65 109 65H207ZM207 93C210.866 93 214 96.134 214 100C214 103.866 210.866 107 207 107C203.134 107 200 103.866 200 100C200 96.134 203.134 93 207 93Z"
                                      fill="#f5f5f5"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M153.672 64L162.974 131.843L163.809 138.649C164.079 140.842 162.519 142.837 160.327 143.107L101.766 150.297C99.5738 150.566 97.578 149.007 97.3088 146.814L88.2931 73.3868C88.1584 72.2904 88.9381 71.2925 90.0344 71.1579C90.0413 71.1571 90.0483 71.1563 90.0552 71.1555L94.9136 70.6105M98.8421 70.1698L103.429 69.6553L98.8421 70.1698Z"
                                      fill="white"/>
                                <path
                                    d="M154.91 63.8302C154.816 63.1463 154.186 62.6678 153.502 62.7616C152.818 62.8554 152.34 63.4859 152.433 64.1698L154.91 63.8302ZM162.974 131.843L164.214 131.69C164.214 131.685 164.213 131.679 164.212 131.673L162.974 131.843ZM97.3088 146.814L98.5495 146.662L97.3088 146.814ZM88.2931 73.3868L89.5337 73.2344L88.2931 73.3868ZM90.0552 71.1555L89.9159 69.9133L90.0552 71.1555ZM95.0529 71.8527C95.739 71.7758 96.2327 71.1572 96.1558 70.4712C96.0788 69.7851 95.4603 69.2913 94.7742 69.3683L95.0529 71.8527ZM98.7028 68.9276C98.0167 69.0046 97.5229 69.6231 97.5999 70.3092C97.6768 70.9952 98.2954 71.489 98.9814 71.412L98.7028 68.9276ZM103.568 70.8975C104.255 70.8205 104.748 70.202 104.671 69.5159C104.594 68.8299 103.976 68.3361 103.29 68.4131L103.568 70.8975ZM152.433 64.1698L161.735 132.013L164.212 131.673L154.91 63.8302L152.433 64.1698ZM161.733 131.995L162.569 138.801L165.05 138.497L164.214 131.69L161.733 131.995ZM162.569 138.801C162.754 140.309 161.682 141.681 160.174 141.866L160.479 144.347C163.357 143.994 165.403 141.375 165.05 138.497L162.569 138.801ZM160.174 141.866L101.614 149.056L101.919 151.538L160.479 144.347L160.174 141.866ZM101.614 149.056C100.107 149.241 98.7346 148.169 98.5495 146.662L96.0681 146.967C96.4215 149.845 99.0409 151.891 101.919 151.538L101.614 149.056ZM98.5495 146.662L89.5337 73.2344L87.0524 73.5391L96.0681 146.967L98.5495 146.662ZM89.5337 73.2344C89.4833 72.8233 89.7756 72.4491 90.1867 72.3986L89.8821 69.9173C88.1005 70.136 86.8336 71.7576 87.0524 73.5391L89.5337 73.2344ZM90.1867 72.3986C90.1893 72.3983 90.1919 72.398 90.1945 72.3977L89.9159 69.9133C89.9046 69.9145 89.8933 69.9159 89.8821 69.9173L90.1867 72.3986ZM90.1945 72.3977L95.0529 71.8527L94.7742 69.3683L89.9159 69.9133L90.1945 72.3977ZM98.9814 71.412L103.568 70.8975L103.29 68.4131L98.7028 68.9276L98.9814 71.412ZM103.29 68.4131L98.7028 68.9276L98.9814 71.412L103.568 70.8975L103.29 68.4131Z"
                                    fill="#ca7e65"/>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M151.14 68.2692L159.56 129.753L160.317 135.921C160.561 137.908 159.167 139.715 157.203 139.956L104.761 146.395C102.798 146.636 101.008 145.22 100.764 143.233L92.6141 76.8568C92.4795 75.7605 93.2591 74.7626 94.3555 74.628L100.843 73.8314"
                                      fill="#fff"/>
                                <path
                                    d="M107.922 54C107.922 52.4812 109.153 51.25 110.672 51.25H156.229C156.958 51.25 157.657 51.5395 158.173 52.0549L171.616 65.4898C172.132 66.0056 172.422 66.7053 172.422 67.4349V130C172.422 131.519 171.191 132.75 169.672 132.75H110.672C109.153 132.75 107.922 131.519 107.922 130V54Z"
                                    fill="white" stroke="#ca7e65"
                                    stroke-width="2.5"/>
                                <path
                                    d="M156.672 52.4028V64C156.672 65.6569 158.015 67 159.672 67H167.605"
                                    stroke="#ca7e65" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round"/>
                                <path
                                    d="M118 118H144M118 67H144H118ZM118 79H161H118ZM118 92H161H118ZM118 105H161H118Z"
                                    stroke="#ca7e65" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
{{--            @else--}}
{{--                @foreach (range(1, 5) as $item)--}}
{{--                    <div class="d-detail placeholder-wave-reverse">--}}
{{--                        <div class="detail placeholder flex-5 m-flex-15"></div>--}}
{{--                        <div class="detail placeholder flex-5 m-flex-22"></div>--}}
{{--                        <div class="detail placeholder flex-28 m-flex-100"></div>--}}
{{--                        <div class="detail placeholder flex-14 m-flex-70"></div>--}}
{{--                        <div class="detail placeholder flex-10 m-flex-50"></div>--}}
{{--                        <div class="detail placeholder flex-8 m-flex-50"></div>--}}
{{--                        <div class="detail placeholder flex-13 m-flex-48"></div>--}}
{{--                        <div class="detail placeholder sticky-table flex-16 m-flex-45">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
        @endforelse
    </div>
</div>
<div
    class="main-data p-pagination d-flex m-direction-column-reverse justify-content-between py-2 px-2">
    <div class="perpage m-mt-10">
        <div class="select c-s h-2percent-3rem mt-5 mr-3">
            <select wire:model.live="query.perPage" class="radius-7">
                @foreach ($perPages as $count)
                    <option>
                        {{ $count }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    {{ count($data ?? []) > 0 ? $data->links() : '' }}
</div>
