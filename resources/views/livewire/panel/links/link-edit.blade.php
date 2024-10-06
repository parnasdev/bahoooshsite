<div>
    <div
        class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
        <div class="c-right box-design bg-white flex-70">
            <div class="flex-100 px-10 py-10">
                {{-- menu --}}
                <div class="mb-10">
                    {{-- level 1 --}}
                    {{-- @dd($this->links) --}}
                    @foreach($links as $link)
                        <livewire:panel.links.link-item :link="$link" :parent="'panel.links.link-edit'" :key="$link->id"/>
                    @endforeach
                </div>
                @can('links.create')
                <div
                    class="placeholder flex-100 m-flex-100 bg-f2 border-dashed-1 border-secondary radius-8 d-flex justify-content-center pos-relative mb-10 m-ml-0"
                    style="height:150px">
                    {{-- add component --}}
                    <div class="d-flex align-items-center justify-content-center mr-10 pos-absolute mt-50">
                        <button type="button"
                                @click="$dispatch('openModal' ,{component: 'panel.links.link-select-modal' , arguments: {link_type: @js($link_type)}})"
                                class="btn d-flex align-items-center justify-content-center py-12 px-15 border-secondary border-dotted-1 bg-white text-white radius-5">
                            <svg width="20" height="20" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333" stroke-width="2"
                                      stroke-linecap="round"/>
                                <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333" stroke-width="2"
                                      stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
                @endcan
            </div>
        </div>
        <div class="c-left sticky-data flex-28">
            <div class="box-design bg-white box-design p-7 mb-12">
                <!--? select -->
                <x-inputs.panel.select label="نوع منو"
                                       wire:model.live="link_type"
                                       class="d-flex align-items-center flex-wrap pt-6"
                                       :options="$link_types">
                </x-inputs.panel.select>
            </div>
        </div>
    </div>
</div>
