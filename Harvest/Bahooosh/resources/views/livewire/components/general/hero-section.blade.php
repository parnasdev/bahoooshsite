<div>
    @if(!$is_edit)
        <div
            class="p-main flex justify-between lg:flex-row xl:flex-row  items-center gap-5 w-full md:flex-col flex-mobi-col sm:flex-col">
            <div class="text-main flex gap-3 sm:w-full flex-col items-center w-1/2">
                <h1 class="text sm:text-xl   md:text-xl lg:text-2xl xl:text-2xl extraBold">
                    {{ $block->data['title'] ?? '' }}
                </h1>
                <span class="text-gray-s text-small">{{ $block->data['subtitle'] ?? '' }}</span>
                <x-buttons.home.button href="{{ $block->data['btn_link'] }}" class="bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-4 w-64 gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" viewBox="0 0 28.057 30.608">
                        <path id="fi-rr-mug-hot"
                              d="M24.594,12.753h-.638V11.478A3.826,3.826,0,0,0,20.13,7.652H4.826A3.826,3.826,0,0,0,1,11.478V24.231a6.384,6.384,0,0,0,6.377,6.377h10.2a6.388,6.388,0,0,0,6.249-5.1,4.591,4.591,0,0,0,5.229-4.464V17.217A4.464,4.464,0,0,0,24.594,12.753Zm-7.014,15.3H7.377a3.826,3.826,0,0,1-3.826-3.826V11.478A1.275,1.275,0,0,1,4.826,10.2h15.3a1.275,1.275,0,0,1,1.275,1.275V24.231a3.826,3.826,0,0,1-3.826,3.826Zm8.927-7.014a2.067,2.067,0,0,1-2.551,1.913V15.3a2.067,2.067,0,0,1,2.551,1.913ZM11.2,3.826V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm5.1,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Zm-10.2,0V1.275a1.275,1.275,0,1,1,2.551,0V3.826a1.275,1.275,0,1,1-2.551,0Z"
                              transform="translate(-1)" fill="#fff"/>
                    </svg>

                    ساخت فروشگاه رایگان
                </x-buttons.home.button>
                <ul class="row-option flex justify-center flex-wrap pt-3 gap-3  mt-5">
                    @foreach(explode('|' , $block->data['spec']) as $str)
                        <li class="option flex gap-2 items-center justify-start mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 viewBox="0 0 28.889 28.889">
                                <path id="fi-rr-badge-check"
                                      d="M14.445,28.889a6.608,6.608,0,0,1-5.065-2.358,6.334,6.334,0,0,1-5.148-1.872,6.614,6.614,0,0,1-1.914-5.251A6.344,6.344,0,0,1,0,14.445,6.6,6.6,0,0,1,2.359,9.379,6.342,6.342,0,0,1,4.231,4.231,6.589,6.589,0,0,1,9.481,2.317,6.348,6.348,0,0,1,14.445,0,6.608,6.608,0,0,1,19.51,2.358,6.343,6.343,0,0,1,24.658,4.23a6.614,6.614,0,0,1,1.914,5.251,6.344,6.344,0,0,1,2.317,4.964A6.6,6.6,0,0,1,26.53,19.51a6.342,6.342,0,0,1-1.872,5.148,6.625,6.625,0,0,1-5.249,1.914A6.348,6.348,0,0,1,14.445,28.889ZM9.477,24.166a2.259,2.259,0,0,1,1.743.814,4.212,4.212,0,0,0,6.45,0,2.265,2.265,0,0,1,1.945-.806,4.213,4.213,0,0,0,4.56-4.56,2.259,2.259,0,0,1,.806-1.946,4.212,4.212,0,0,0,0-6.447,2.261,2.261,0,0,1-.806-1.946,4.212,4.212,0,0,0-4.559-4.56,2.254,2.254,0,0,1-1.946-.805,4.212,4.212,0,0,0-6.45,0,2.277,2.277,0,0,1-1.945.806,4.213,4.213,0,0,0-4.56,4.56,2.259,2.259,0,0,1-.806,1.946,4.212,4.212,0,0,0,0,6.447,2.261,2.261,0,0,1,.806,1.946,4.212,4.212,0,0,0,4.559,4.56c.069-.006.136-.008.2-.008Zm5.932-5.948,5.7-5.5a1.2,1.2,0,0,0-1.672-1.733L13.721,16.5a1.214,1.214,0,0,1-1.733-.03L9.246,13.922a1.2,1.2,0,0,0-1.638,1.763L10.318,18.2a3.61,3.61,0,0,0,2.559,1.058A3.57,3.57,0,0,0,15.41,18.22Z"
                                      fill="#2cbe00"/>
                            </svg>
                            <span class="text-small">{{$str}}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="video-main  flex sm:w-full justify-end w-1/2">
                <div class="box-video flex justify-center items-center pos-relative">
                    <img class="img-gif" src="{{ asset($block->data['video_url']) }}" />
{{--                    <button class="play-video pos-absolute cursor-pointer">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90"--}}
{{--                             viewBox="0 0 123.246 123.246">--}}
{{--                            <path id="fi-rr-caret-circle-down"--}}
{{--                                  d="M61.623,123.246a61.623,61.623,0,1,1,61.623-61.623,61.623,61.623,0,0,1-61.623,61.623Zm0-112.975a51.352,51.352,0,1,0,51.353,51.352A51.352,51.352,0,0,0,61.623,10.27Zm-29.43,49.3L58.316,86.036a4.622,4.622,0,0,0,6.614,0L91.053,59.569a4.745,4.745,0,0,0-3.307-8.088H35.5a4.745,4.745,0,0,0-3.307,8.088Z"--}}
{{--                                  transform="translate(0 123.246) rotate(-90)"/>--}}
{{--                        </svg>--}}
{{--                    </button>--}}
                    <img width="45" src="img/view/png/arrow-video-main.png" alt="" class="img-arrow">
                </div>

            </div>
        </div>
    @else
        <x-bahooosh::general.hero-edit-form :$blockForm/>
    @endif
</div>
