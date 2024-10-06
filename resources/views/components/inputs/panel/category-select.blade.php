@props(['label' => null , 'categories' => [] , 'cat_type' => 'category'])
<div {{ $attributes->whereDoesntStartWith('wire:model')->merge(['class' => 'select-data']) }}>
    <div class="flex-100 selective-custom justify-content-start">
        <!-- child -->
        <div
            class="d-flex align-items-center justify-content-between m-left-auto pos-relative pr-10 pb-5">
            @if($label ?? false)
                <label class="d-flex f-14 text-63">
                    {{ $label }}
                    <div class="rx-title title-input pb-10">
                        <div class="p-rx">
                            <div
                                class="rx-border-rectangle-after label-input"></div>
                        </div>
                    </div>
                </label>
            @endif
            <div class="tooltip c-btn justify-content-end p-3">
                <div wire:loading wire:target="openQuickAddCategory('{{ $cat_type }}')">کمی صبر
                    کنید
                </div>
                <button type="button"
                        class="btn bg-success text-white radius-5"
                        style="padding: 3px"
                        wire:click="openQuickAddCategory('{{ $cat_type }}')"
                        wire:loading.remove
                        wire:target="openQuickAddCategory">
                    <svg width="20" height="20" viewBox="0 0 32 32"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.9375 8.02344L15.9375 23.3601"
                              stroke="#fff"
                              stroke-width="2" stroke-linecap="round"/>
                        <path d="M23.5898 15.6914L8.29139 15.6914"
                              stroke="#fff"
                              stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </button>

            </div>
        </div>
        <div class="pos-relative" x-data="{show: true}" @open-toggle.window="show = false">
            <!--! title  -->
            <div
                class="select-data toggle-height  box-shadow-pattern-1 cursor-pointer radius-5 py-5"
            :class="show ? 'custom-dataSelect' : '' ">
                <!--! title  -->
                <div
                    class="d-flex justify-content-start m-left-auto pos-relative pr-5 py-7 mb-7"
                    @click="show = !show">
                    @if($label ?? false)
                        <label class="d-flex f-14 text-63">
                            {{ $label }}
                        </label>
                    @endif
                </div>
                <div class="list scroller ltr pt-10 pr-25">
                    <!--! checkbox  -->
                    <div
                        class="checkbox-list flex-direction-column align-items-start rtl flex-100">
                        @foreach($categories as $category)
                            <div>
                                <label class="checkbox f-14">
                                    <input class="checkbox-input"
                                           type="checkbox"
                                           value="{{ $category['id'] }}"
                                           {{ $attributes->wire('model') }}>
                                    <span class="checkbox-checkmark-box">
                                                                            <span
                                                                                class="checkbox-checkmark"></span> </span>
                                    <span>{{ $category['name'] }}</span>
                                </label>
                                <div class="into-list pr-15">
                                    @foreach($category['children'] as $child1)
                                        <div>
                                            <label
                                                class="checkbox f-14 pb-5">
                                                <input
                                                    class="checkbox-input"
                                                    type="checkbox"
                                                    value="{{$child1['id']}}"
                                                    {{ $attributes->wire('model') }}>
                                                <span
                                                    class="checkbox-checkmark-box">
                                                                                                <span
                                                                                                    class="checkbox-checkmark"></span>
                                                                                            </span>
                                                <span>{{ $child1['name'] }}</span>
                                            </label>
                                            <div class="into-list pr-15">
                                                @foreach($child1['children'] as $child2)
                                                    <label
                                                        class="checkbox f-14 pb-5">
                                                        <input
                                                            class="checkbox-input"
                                                            type="checkbox"
                                                            value="{{ $child2['id'] }}"
                                                            {{ $attributes->wire('model') }}>
                                                        <span
                                                            class="checkbox-checkmark-box">
                                                                                                        <span
                                                                                                            class="checkbox-checkmark"></span>
                                                                                                    </span>
                                                        <span>{{ $child2['name'] }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
