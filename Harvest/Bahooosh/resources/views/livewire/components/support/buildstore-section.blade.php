<div>
    @if(!$is_edit)
        <div class="p-Building-store items-center flex flex-col w-full">
            <div class="title-website">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 29.839 29.839">
                    <path id="fi-rr-object-group"
                          d="M27.351,21.555V8.283a4.351,4.351,0,1,0-5.8-5.8H8.283a4.351,4.351,0,1,0-5.8,5.8V21.557a4.351,4.351,0,1,0,5.8,5.8H21.557a4.351,4.351,0,1,0,5.8-5.8Zm-6.171,3.31H8.658A4.362,4.362,0,0,0,4.973,21.18V8.658A4.362,4.362,0,0,0,8.658,4.973H21.18a4.362,4.362,0,0,0,3.685,3.685V21.18A4.362,4.362,0,0,0,21.18,24.865ZM25.487,2.486a1.865,1.865,0,1,1-1.865,1.865A1.867,1.867,0,0,1,25.487,2.486Zm-21.135,0A1.865,1.865,0,1,1,2.486,4.351,1.867,1.867,0,0,1,4.351,2.486Zm0,24.865a1.865,1.865,0,1,1,1.865-1.865A1.867,1.867,0,0,1,4.351,27.351Zm21.135,0a1.865,1.865,0,1,1,1.865-1.865A1.867,1.867,0,0,1,25.487,27.351ZM17.405,13.676V11.189A2.489,2.489,0,0,0,14.919,8.7H9.946a2.489,2.489,0,0,0-2.486,2.486v2.486a2.489,2.489,0,0,0,2.486,2.486h4.973A2.489,2.489,0,0,0,17.405,13.676ZM9.946,11.189h4.973v2.486H9.946Zm12.432,4.973v2.486a2.489,2.489,0,0,1-2.486,2.486H14.919a2.489,2.489,0,0,1-2.486-2.486,1.243,1.243,0,0,1,2.486,0h4.973V16.162a1.243,1.243,0,1,1,0-2.486A2.489,2.489,0,0,1,22.378,16.162Z"/>
                </svg>

                <h2>{{ $block->data['title'] }}</h2>
            </div>
            <div class="list-building grid  gap-3 grid-cols-4 mb-5 px-4 mt-20">
                @foreach($block->data['services'] as $service)
                    <div class="box-building  bg-white  w-full">
                        <div class="floating-box flex flex-col items-center w-full ">
                            <img class="img" width="80" src="{{ $service['image_url'] }}" alt="">
                            <h3 class="text-base RaviBold">{{ $service['title'] }}</h3>
                            <span class="text-small text-gray w-10/12 mt-2 text-center RaviBold">
                                {{ $service['description'] }}
                            </span>
                        </div>

                    </div>
                @endforeach
            </div>
            <div class="box-more-features flex justify-between items-center px-3 h-16 bg-white rounded-lg ">
                <span class="text-base RaviBold text-normal">{{ $block->data['box_title'] }}</span>
                <x-buttons.home.button-o href="{{ $block->data['box_btn_link'] }}" class="bg-white text-black border-2 border-black hover:bg-black hover:text-white px-4">
                    {{ $block->data['box_btn_text'] }}
                </x-buttons.home.button-o>
            </div>
        </div>
    @else
        <x-bahooosh::support.buildstore-edit-form :$blockForm/>
    @endif
</div>
