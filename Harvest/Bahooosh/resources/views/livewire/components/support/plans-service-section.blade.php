<div>
    @if(!$is_edit)
        <div class="row-three mt-12 w-full flex flex-col items-center">
            <div class="title-website-s">
                {!! $block->data['icon'] ?? '' !!}
                <h2 class="relative">{{ $block->data['title'] ?? '' }}</h2>
            </div>
            <div x-data="{option : 0}"
                 class="list-faq gap-3 mt-5  w-full flex flex-col items-center justify-start">
                @foreach($block->data['faqs'] as $index => $faq)
                    <div class="option-thumbnail bg-white rounded-2xl flex flex-col w-full">
                        <div @click="option = @js($index)"
                             class="question-faq rounded-2xl head-option cursor-pointer  w-full flex justify-between items-center">
                            <div class="start w-4/5 flex gap-3 items-center justify-start">

                                <h4 class="text-normal relative top-1 bolX">
                                    {{ $faq['title'] }}
                                </h4>
                            </div>
                            <div class="end">
                                <svg class="arrow" :class="option=== @js($index)? 'arrow-active':''"
                                     xmlns="http://www.w3.org/2000/svg" width="21" height="21"
                                     viewBox="0 0 28.889 28.89">
                                    <path id="fi-rr-arrow-alt-square-left"
                                          d="M22.871,0H6.019A6.025,6.025,0,0,0,0,6.019V22.871a6.025,6.025,0,0,0,6.019,6.019H22.871a6.025,6.025,0,0,0,6.019-6.019V6.019A6.025,6.025,0,0,0,22.871,0Zm3.611,22.871a3.616,3.616,0,0,1-3.611,3.611H6.019a3.616,3.616,0,0,1-3.611-3.611V6.019A3.616,3.616,0,0,1,6.019,2.407H22.871a3.616,3.616,0,0,1,3.611,3.611Zm-4.815-8.426a1.2,1.2,0,0,1-1.2,1.2H14.445v4.046a.954.954,0,0,1-1.625.664L7.5,15.109a.931.931,0,0,1,0-1.329L12.82,8.531a.954.954,0,0,1,1.625.664v4.046h6.019A1.2,1.2,0,0,1,21.667,14.445Z"
                                          transform="translate(0 28.89) rotate(-90)"/>
                                </svg>
                            </div>
                        </div>
                        <div style="display: none" x-show="option=== @js($index)" x-collapse.duration.1000ms class="w-full">
                            <div x-data class="options-collapse p-4  flex flex-wrap items-center justify-start gap-4  mt-5 w-full">
                                @foreach(explode('|' , $faq['description']) as $str)
                                    <div class="item-option flex items-center justify-start gap-2">
                                        <div class="circle"></div>
                                        <span class="text-small medium text-gray">{{ $str }}</span>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
            <x-buttons.home.button href="{{ $block->data['btn_link'] }}" class="bg-black text-white hover:bg-white hover:text-black border-2 border-black my-7 w-64 gap-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 28.057 30.608">
                    <path id="fi-rr-mug-hot"
                          d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                          transform="translate(-1)" fill="#fff"/>
                </svg>

                {{ $block->data['btn_text'] }}
            </x-buttons.home.button>

        </div>
    @else
        <x-bahooosh::support.planservice-edit-form :$blockForm />
    @endif
</div>
