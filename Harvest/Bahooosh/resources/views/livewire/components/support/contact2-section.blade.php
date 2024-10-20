<div>
    @if(!$is_edit)
        <div class="row-five w-full flex mt-24 mb-2 flex-col items-center">
            <div class="col-support flex flex-col items-center w-full">
                <div class="title-website-col w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 31.953 31.955">
                        <path id="fi-rr-head-side-headphones"
                              d="M26.363,5.884A14.531,14.531,0,0,0,12.585.142,14.64,14.64,0,0,0,3.01,23.53a5.17,5.17,0,0,1,.984,3.135v1.293a4,4,0,0,0,3.994,3.994h9.32A4,4,0,0,0,21.3,27.958h.658a6.677,6.677,0,0,0,6.6-5.785l.292-2.2h.439a2.608,2.608,0,0,0,2.663-2.663c0-1.891-3.9-9.338-5.59-11.425Zm-11.717,6.1a2.663,2.663,0,1,1-2.663,2.663A2.665,2.665,0,0,1,14.645,11.983Zm13.04,5.326a1.33,1.33,0,0,0-1.319,1.157l-.445,3.359A4.008,4.008,0,0,1,21.96,25.3H19.971a1.33,1.33,0,0,0-1.331,1.331v1.331a1.332,1.332,0,0,1-1.331,1.331H7.988a1.332,1.332,0,0,1-1.331-1.331V26.666a7.844,7.844,0,0,0-1.532-4.754A11.977,11.977,0,0,1,12.948,2.779c.122-.017.245-.032.366-.045V9.487a5.326,5.326,0,1,0,2.663,0V2.735A11.914,11.914,0,0,1,24.262,7.52c1.74,2.152,4.86,8.591,5.026,9.79h-1.6Z"
                              transform="translate(0 0.002)"/>
                    </svg>
                    <h2>{{ $block->data['title'] }}</h2>
                </div>
                <p class="description max-[600px]:w-full w-1/3 mt-9 medium text-normal text-center text-gray">
                    {{ $block->data['description'] }}
                </p>
                <h5 class="bolX text-sm mt-4">{{ $block->data['subtitle'] }}</h5>
                <div class="w-2/3 mt-5 max-[600px]:flex-col  boxes flex  items-center justify-center gap-3">
                    <a href="{{ $block->data['link1_url'] }}"
                       class="box-telegram max-[600px]:w-full flex justify-center bolX text-lg items-center relative">
                        {{ $block->data['link1_text'] }}
                        <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 29.834 29.837">
                            <path id="fi-rr-paper-plane"
                                  d="M28.742,1.1A3.687,3.687,0,0,0,25.261.1L5.369,4.292A6.21,6.21,0,0,0,1.822,14.836L3.958,16.97a1.243,1.243,0,0,1,.364.88v3.939a3.686,3.686,0,0,0,.373,1.6l-.01.009.032.032a3.73,3.73,0,0,0,1.693,1.686l.032.032.009-.01a3.686,3.686,0,0,0,1.6.373h3.939a1.243,1.243,0,0,1,.879.363L15,28.007a6.17,6.17,0,0,0,4.376,1.831,6.277,6.277,0,0,0,2-.328,6.133,6.133,0,0,0,4.157-4.956l4.2-19.935A3.7,3.7,0,0,0,28.742,1.1ZM5.718,15.215,3.581,13.08a3.655,3.655,0,0,1-.9-3.822A3.7,3.7,0,0,1,5.792,6.74L25.486,2.593,6.806,21.276V17.85A3.7,3.7,0,0,0,5.718,15.215Zm17.369,8.914a3.73,3.73,0,0,1-6.327,2.128l-2.138-2.138a3.7,3.7,0,0,0-2.634-1.092H8.563L27.245,4.351Z"
                                  transform="translate(-0.003 0)" fill="#fff"/>
                        </svg>

                    </a>
                    <a href="{{ $block->data['link2_url'] }}"
                       class="box-tel flex max-[600px]:w-full justify-center bolX text-lg items-center relative">
                        {{ $block->data['link2_text'] }}
                        <svg class="absolute left-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                             viewBox="0 0 30.398 30.442">
                            <path id="fi-rr-call-history"
                                  d="M22.494,30.413c-10.3.348-28.859-18.06-20.243-28.041L3.708,1.1a3.9,3.9,0,0,1,5.481.056,1.267,1.267,0,0,1,.109.127l2.28,2.963a3.938,3.938,0,0,1-.013,5.422L10.1,11.518a16.2,16.2,0,0,0,8.781,8.8l1.855-1.476a4.016,4.016,0,0,1,5.425-.008l2.965,2.28a1.427,1.427,0,0,1,.127.108,3.94,3.94,0,0,1,0,5.547L28.1,28.1A7.8,7.8,0,0,1,22.494,30.413ZM6.416,2.54a1.386,1.386,0,0,0-.981.405L3.977,4.213c-7.153,8.6,14.736,29.27,22.265,22.156L27.4,25.037a1.394,1.394,0,0,0,.108-1.975L24.557,20.8a1.027,1.027,0,0,1-.127-.11,1.422,1.422,0,0,0-1.961,0,1.279,1.279,0,0,1-.106.1l-2.481,1.976a1.267,1.267,0,0,1-1.24.193A19.018,19.018,0,0,1,7.466,11.789a1.267,1.267,0,0,1,.185-1.267L9.62,8.044a1.075,1.075,0,0,1,.1-.106,1.394,1.394,0,0,0,0-1.962,1.1,1.1,0,0,1-.109-.127L7.347,2.9a1.385,1.385,0,0,0-.931-.357ZM21.575,19.793Zm7-3.854C34.9,6.634,23.764-4.491,14.468,1.83a1.267,1.267,0,1,0,1.45,2.078C22.853-.855,31.26,7.561,26.5,14.491a1.267,1.267,0,1,0,2.078,1.448ZM23.69,13.577a1.267,1.267,0,0,0,0-1.791L21.529,9.622V6.341a1.267,1.267,0,0,0-2.534,0v3.8a1.267,1.267,0,0,0,.371.9L21.9,13.571a1.267,1.267,0,0,0,1.791,0Z"
                                  transform="translate(-0.033 0.024)"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    @else
        <x-bahooosh::support.contact-edit-form :$blockForm/>
    @endif
</div>
