<div>
    <div
            class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
        <div class="flex-100">
            <div>
                {{-- row data --}}
                <div class="mb-15">
                    <div class="c-data">
                        <div class="p-table p-0">
                            {{-- filter --}}
                            <div class="controller-filters mt-10 pr-5 m-pr-0">
                                {{-- search --}}
                                <div class="filters d-flex flex-wrap align-items-center justify-content-between mb-10">
                                    <div class="c-filters flex-70 m-flex-100 d-flex align-items-center justify-content-start m-justify-content-between m-mb-10">
                                        @foreach($this->filters() as $filter)
                                            <div class="{{$filter['column_class']}}">
                                                <x-dynamic-component :component="$filter['component']"
                                                                     wire:model.live="{{ $filter['model'] }}"
                                                                     :class="$filter['class']"
                                                                     :placeholder="$filter['placeholder']"
                                                                     :label="$filter['label']"
                                                                     :icon="$filter['icon']"
                                                                     :options="$filter['options'] ?? null"
                                                />
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- group button --}}
                                    <div class="flex-29 m-flex-100 d-flex flex-wrap justify-content-end">
                                        {{-- show delete data --}}
                                            <div class="d-flex align-items-center">
                                                @foreach($this->links() as $link)
                                                        <x-dynamic-component :component="$link['component']"
                                                                             :route="$link['route']"
                                                                             :class="$link['class']"
                                                                             :color="$link['color']"
                                                        >
                                                            {{ $link['content'] }}
                                                        </x-dynamic-component>
                                                @endforeach
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dark-theme box-design bg-white px-10 py-14 pos-relative">
                                {{-- list --}}
                                <div
                                        class="main-data d-flex align-items-center m-align-items-stretch justify-content-between pb-3">
                                    {{-- title --}}
                                    <div class="rx-title">
                                        <div class="title d-flex align-items-center pb-10 pr-7">
                                            <div class="text">
                                                <h4>لیست صفحه ها</h4>
                                            </div>
                                            <div class="result pos-relative right-4">
                                                <span
                                                        class="d-flex align-items-center justify-content-center f-15 bg-parnas text-white px-8"
                                                        style="border-radius:5px;">{{ $posts->total() }}</span>
                                            </div>
                                            <div class="p-rx">
                                                <div class="rx-border-rectangle"></div>
                                                <div class="rx-border-rectangle-after"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                            class="flex-75 m-flex-100 d-flex align-items-center justify-content-end m-justify-content-start">

                                        @foreach($this->actions() as $action)
                                            @if($action['type'] == 'create_btn')
                                                <x-dynamic-component :component="$action['component']" :route="$action['route']" :can="$action['can']" />
                                            @elseif($action['type'] == 'trash_btn')
                                                <x-dynamic-component :component="$action['component']" :trash="$action['trash']" :can="$action['can']" />
                                            @elseif($action['type'] == 'action_select')
                                                <x-dynamic-component :component="$action['component']" :trash="$action['trash']" wire:model.live="{{ $action['wire:model'] }}" :can="$action['can']" />
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                {{-- table --}}
                                <x-tables.panel.normal-table :columns="$this->columns()" :data="$posts" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
