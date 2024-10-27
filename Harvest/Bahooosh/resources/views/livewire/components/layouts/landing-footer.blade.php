<div>
    @if(!$is_edit)
        <div class="footer flex flex-col items-center justify-center">
            <div class="title-website-s">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 28.057 30.608">
                    <path id="fi-rr-map-marker-smile"
                          d="M15.029,30.608a6.908,6.908,0,0,1-4.855-1.979L5.145,23.983a14.028,14.028,0,1,1,19.8-19.873,14.028,14.028,0,0,1,0,19.839l-5.091,4.7a6.885,6.885,0,0,1-4.83,1.955Zm0-28.057A11.478,11.478,0,0,0,6.912,22.145l5.018,4.636a4.482,4.482,0,0,0,6.169.026l5.081-4.7a11.478,11.478,0,0,0-.036-16.2h0a11.4,11.4,0,0,0-8.116-3.362Zm6,14.092a1.275,1.275,0,0,0-1.8-1.8,5.939,5.939,0,0,1-8.4,0,1.275,1.275,0,0,0-1.8,1.8,8.489,8.489,0,0,0,12.006,0ZM11.84,8.927a1.913,1.913,0,1,0,1.913,1.913A1.914,1.914,0,0,0,11.84,8.927Zm6.377,0A1.913,1.913,0,1,0,20.13,10.84a1.914,1.914,0,0,0-1.913-1.913Z"
                          transform="translate(-1)"/>
                </svg>
                <h2 class="relative">{{ $block->data['footer_title'] }}</h2>
            </div>
            <div class="row-enamad my-[2rem] flex justify-center items-center gap-3">
                @foreach($block->data['licences'] as $licence)
                    {!! $licence['code'] !!}
{{--                    <img class="w-[90px] max-[700px]:w-[70px]" src="/img/view/png/zeybal.png" alt="">--}}
                @endforeach

            </div>
            <div class="row-link-footer flex justify-center items-center gap-5">
                @foreach($block->data['links'] as $link)
                    <a class="text-gray text-[13px] max-[600px]:text-[12px]" href="{{ $link['link'] ?? '' }}">{{ $link['title'] ?? '' }}</a>
                @endforeach
            </div>
            <div class="row-copyright flex justify-start items-center gap-3 mt-[2.5rem] mb-[1.5rem] w-[60%] max-[700px]:w-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 57.249 48.922">
                    <g id="Layer_2" data-name="Layer 2" transform="translate(1.755 1.97)">
                        <g id="Layer_1" data-name="Layer 1" transform="translate(0 0)">
                            <path id="Path_1344" data-name="Path 1344" d="M53.9,51.278,37.032,21.66,15.31,59.421"
                                  transform="translate(-10.004 -13.835)" fill="none" stroke="#d4d4d4"
                                  stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                            <path id="Path_1345" data-name="Path 1345"
                                  d="M49.149,62.09h9.725l-6.21-11.11L42.19,69.4"
                                  transform="translate(-25.636 -30.886)" fill="none" stroke="#d4d4d4"
                                  stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                            <path id="Path_1351" data-name="Path 1351"
                                  d="M50.22,40.4H84.044L61.845,2.96,59.1,7.655,74.6,34.164h-3.95"
                                  transform="translate(-30.306 -2.96)" fill="none" stroke="#d4d4d4"
                                  stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                            <path id="Path_1352" data-name="Path 1352"
                                  d="M8.869,40.4H2.63L24.825,2.96l2.749,4.7L12.066,34.164"
                                  transform="translate(-2.63 -2.96)" fill="none" stroke="#d4d4d4"
                                  stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/>
                        </g>
                    </g>
                </svg>
                <div class="text flex flex-col items-start">
                    <span class="text-[11px] max-[600px]:text-[10px] bolX text-base">{{ $block->data['copyright_year'] }}</span>
                    <span class="text-[11px] max-[600px]:text-[10px] medium">{{ $block->data['copyright_text'] }}</span>
                </div>
            </div>

        </div>
    @else
        <x-bahooosh::layouts.landingfooter-edit-form :$blockForm />
    @endif
</div>
