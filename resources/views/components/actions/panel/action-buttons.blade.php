@props(['actions' => [] , 'model' => null , 'trashed' => false])

@foreach($actions as $action)
    @empty($action['can'])

    @if($action['type'] == 'edit')
        <a href="{{ $action['route'] instanceof Closure ? $action['route']($model) : $action['route'] }}"
           class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
           style="border-radius: 10px;width:35px;height:35px">
            <div class="image tooltip d-flex cursor-pointer">
                <svg width="20" height="20" viewBox="0 0 47 47"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12.0013 28.2652L12.0013 28.2652C11.9882 28.2783 11.9748 28.2917 11.961 28.3054C11.8092 28.4567 11.6171 28.6481 11.4806 28.8897C11.3441 29.1313 11.2793 29.3946 11.2281 29.6027C11.2234 29.6216 11.2189 29.64 11.2144 29.658L12.181 29.899L11.2144 29.658L9.6376 35.9809C9.63481 35.9921 9.63189 36.0037 9.62888 36.0158C9.59215 36.1623 9.54126 36.3652 9.5238 36.5448C9.5037 36.7515 9.49728 37.2035 9.86628 37.5721C10.2353 37.9406 10.6872 37.9337 10.8939 37.9133C11.0735 37.8956 11.2764 37.8445 11.4228 37.8076C11.4348 37.8046 11.4465 37.8017 11.4577 37.7989L11.2174 36.8403L11.4577 37.7989L17.7605 36.2192L17.7606 36.2192C17.7614 36.219 17.7622 36.2188 17.763 36.2186C17.7802 36.2143 17.7978 36.2099 17.8159 36.2055C18.0244 36.1539 18.2884 36.0886 18.5303 35.9513L18.0368 35.0815L18.5303 35.9513C18.7723 35.814 18.9637 35.6209 19.115 35.4684C19.1287 35.4545 19.1421 35.441 19.1552 35.4279L34.5653 19.9793L34.6037 19.9408C34.9025 19.6414 35.193 19.3503 35.4004 19.0779C35.6342 18.7707 35.8538 18.3733 35.8538 17.8606C35.8538 17.3479 35.6342 16.9505 35.4004 16.6434C35.193 16.371 34.9025 16.0799 34.6037 15.7804L34.5653 15.7419L31.6533 12.8227L31.6148 12.7841C31.3147 12.4831 31.0231 12.1906 30.7501 11.9819C30.4425 11.7466 30.044 11.5254 29.5293 11.5254C29.0147 11.5254 28.6162 11.7466 28.3085 11.9819C28.0356 12.1906 27.7439 12.4831 27.4438 12.7841C27.431 12.7969 27.4182 12.8098 27.4053 12.8227L12.0124 28.254L12.0124 28.254L12.0013 28.2652Z"
                        stroke="#fff" stroke-width="2"/>
                    <path
                        d="M24.7461 14.9865L30.483 11.1523L36.2199 16.9036L32.3953 22.6548L24.7461 14.9865Z"
                        fill="#fff"/>
                </svg>
                <div class="s-tooltip">
                    <span>ویرایش</span>
                </div>
            </div>
        </a>
    @elseif($action['type'] == 'copy')
        @if (!$trashed)
            <button
                wire:click="replicate({{ $model->id }})"
                class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
                style="border-radius: 10px;width:35px;height:35px">
                <div class="image tooltip d-flex cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                         height="16" fill="white" class="bi bi-clipboard"
                         viewBox="0 0 16 16">
                        <path
                            d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path
                            d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                    <div class="s-tooltip">
                        <span>ایجاد کپی</span>
                    </div>
                </div>
            </button>
        @endif
    @elseif($action['type'] == 'restore')
        @if($trashed)
            <button
                wire:click="restore({{$model->id}})"
                class="bg-warning parnas-data d-flex align-items-center justify-content-center ml-5"
                style="border-radius: 10px;width:35px;height:35px">
                <div class="image tooltip d-flex cursor-pointer">
                    <svg width="20" height="20"
                         viewBox="0 0 47 47" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path

                            d="M19.75 36.4984L19.042 35.7922L18.3375 36.4984L19.042 37.2046L19.75 36.4984ZM26.6912 28.1239L19.042 35.7922L20.458 37.2046L28.1072 29.5363L26.6912 28.1239ZM19.042 37.2046L26.6912 44.873L28.1072 43.4605L20.458 35.7922L19.042 37.2046Z"
                            fill="#fff"/>
                        <path
                            d="M11.9781 29.7895C10.5048 27.2312 9.91464 24.257 10.2993 21.3281C10.6839 18.3993 12.0218 15.6795 14.1055 13.5907C16.1891 11.5018 18.9021 10.1606 21.8236 9.77496C24.7452 9.38937 27.712 9.98098 30.264 11.458C32.8159 12.9351 34.8104 15.215 35.9381 17.9443C37.0657 20.6735 37.2636 23.6995 36.5009 26.553C35.7382 29.4064 34.0577 31.9279 31.7199 33.7262C29.382 35.5245 26.5176 36.4993 23.5709 36.4993"
                            stroke="#fff" stroke-width="2"
                            stroke-linecap="round"/>
                    </svg>
                    <div class="s-tooltip">
                        <span>بازگردانی</span>
                    </div>
                </div>
            </button>
        @endif

    @elseif($action['type'] == 'comment')
        {{--        {{ route('panel.comments.index', ['post' => $post->id, 'type' => $post_type]) }}--}}
        <a href="#"
           class="bg-info parnas-data d-flex align-items-center justify-content-center ml-5"
           style="border-radius: 10px;width:35px;height:35px">
            <div class="image tooltip d-flex cursor-pointer">
                <svg width="18" height="18"
                     viewBox="0 0 32 32" fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M23.5176 4.65713V4.65713C24.2841 4.65713 24.6673 4.65713 24.9848 4.72677C26.1285 4.97757 27.0218 5.87083 27.2726 7.0145C27.3422 7.33204 27.3422 7.71528 27.3422 8.48174L27.3422 11.3254C27.3422 11.7969 27.3422 12.0326 27.1958 12.179C27.0493 12.3255 26.8136 12.3255 26.3422 12.3255L19.693 12.3255M23.5176 4.65713V4.65713C22.7511 4.65713 22.3679 4.65713 22.0504 4.72677C20.9067 4.97757 20.0134 5.87083 19.7626 7.0145C19.693 7.33204 19.693 7.71528 19.693 8.48174L19.693 12.3255M23.5176 4.65713L8.39453 4.65713C6.50891 4.65713 5.5661 4.65713 4.98032 5.24292C4.39453 5.8287 4.39453 6.77151 4.39453 8.65713L4.39453 27.6621L8.21914 26.3841L12.0438 27.6621L15.8684 26.3841L19.693 27.6621L19.693 12.3255"
                        stroke="#fff" stroke-width="2"/>
                    <path d="M9.49609 9.76953L14.5956 9.76953"
                          stroke="#fff" stroke-width="2"
                          stroke-linecap="round"/>
                    <path d="M10.7695 14.8809H9.49148" stroke="#fff"
                          stroke-width="2" stroke-linecap="round"/>
                    <path d="M9.49609 19.9922L13.3207 19.9922"
                          stroke="#fff" stroke-width="2"
                          stroke-linecap="round"/>
                </svg>
                <div class="s-tooltip">
                    <span>دیدگاه ها</span>
                </div>
            </div>
        </a>
    @elseif($action['type'] == 'delete' && (isset($action['showWhen']) ? $action['showWhen']($model) : true))
        <button
            wire:click="destroy({{ $model->id }})"
            class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
            style="border-radius: 10px;width:35px;height:35px">
            <div class="image tooltip d-flex cursor-pointer">
                <svg width="20" height="20" viewBox="0 0 31 31"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.7852 19.2988L12.7852 15.4647"
                          stroke="#fff" stroke-width="2"
                          stroke-linecap="round"/>
                    <path d="M17.8828 19.2988L17.8828 15.4647"
                          stroke="#fff" stroke-width="2"
                          stroke-linecap="round"/>
                    <path
                        d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                        stroke="#fff" stroke-width="2"
                        stroke-linecap="round"/>
                    <path
                        d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                        stroke="#fff" stroke-width="2"
                        stroke-linecap="round"/>
                </svg>
                <div class="s-tooltip">
                    <span>حذف</span>
                </div>
            </div>
        </button>
    @elseif($action['type'] == 'show_more')
        <button
            @click="$dispatch('openModal' , {component: 'panel.utils.show_more-modal' , arguments: {item: @js($action['item'] ?? []) , data: @js($action['data']($model))}})"
            class="bg-info parnas-data d-flex align-items-center justify-content-center ml-5"
            style="border-radius: 10px;width:35px;height:35px">
            <div class="image tooltip d-flex cursor-pointer">
                <x-utils.icons icon="eye" fill="#fff" width="20" height="20" />
                <div class="s-tooltip">
                    <span>نمایش بیشتر</span>
                </div>
            </div>
        </button>
    @endif

    @else
        @can($action['can'])
            @if($action['type'] == 'edit')
                <a href="{{ $action['route'] instanceof Closure ? $action['route']($model) : $action['route'] }}"
                   class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
                   style="border-radius: 10px;width:35px;height:35px">
                    <div class="image tooltip d-flex cursor-pointer">
                        <svg width="20" height="20" viewBox="0 0 47 47"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0013 28.2652L12.0013 28.2652C11.9882 28.2783 11.9748 28.2917 11.961 28.3054C11.8092 28.4567 11.6171 28.6481 11.4806 28.8897C11.3441 29.1313 11.2793 29.3946 11.2281 29.6027C11.2234 29.6216 11.2189 29.64 11.2144 29.658L12.181 29.899L11.2144 29.658L9.6376 35.9809C9.63481 35.9921 9.63189 36.0037 9.62888 36.0158C9.59215 36.1623 9.54126 36.3652 9.5238 36.5448C9.5037 36.7515 9.49728 37.2035 9.86628 37.5721C10.2353 37.9406 10.6872 37.9337 10.8939 37.9133C11.0735 37.8956 11.2764 37.8445 11.4228 37.8076C11.4348 37.8046 11.4465 37.8017 11.4577 37.7989L11.2174 36.8403L11.4577 37.7989L17.7605 36.2192L17.7606 36.2192C17.7614 36.219 17.7622 36.2188 17.763 36.2186C17.7802 36.2143 17.7978 36.2099 17.8159 36.2055C18.0244 36.1539 18.2884 36.0886 18.5303 35.9513L18.0368 35.0815L18.5303 35.9513C18.7723 35.814 18.9637 35.6209 19.115 35.4684C19.1287 35.4545 19.1421 35.441 19.1552 35.4279L34.5653 19.9793L34.6037 19.9408C34.9025 19.6414 35.193 19.3503 35.4004 19.0779C35.6342 18.7707 35.8538 18.3733 35.8538 17.8606C35.8538 17.3479 35.6342 16.9505 35.4004 16.6434C35.193 16.371 34.9025 16.0799 34.6037 15.7804L34.5653 15.7419L31.6533 12.8227L31.6148 12.7841C31.3147 12.4831 31.0231 12.1906 30.7501 11.9819C30.4425 11.7466 30.044 11.5254 29.5293 11.5254C29.0147 11.5254 28.6162 11.7466 28.3085 11.9819C28.0356 12.1906 27.7439 12.4831 27.4438 12.7841C27.431 12.7969 27.4182 12.8098 27.4053 12.8227L12.0124 28.254L12.0124 28.254L12.0013 28.2652Z"
                                stroke="#fff" stroke-width="2"/>
                            <path
                                d="M24.7461 14.9865L30.483 11.1523L36.2199 16.9036L32.3953 22.6548L24.7461 14.9865Z"
                                fill="#fff"/>
                        </svg>
                        <div class="s-tooltip">
                            <span>ویرایش</span>
                        </div>
                    </div>
                </a>
            @elseif($action['type'] == 'copy')
                @if (!$trashed)
                    <button
                        wire:click="replicate({{ $model->id }})"
                        class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
                        style="border-radius: 10px;width:35px;height:35px">
                        <div class="image tooltip d-flex cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                 height="16" fill="white" class="bi bi-clipboard"
                                 viewBox="0 0 16 16">
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                            </svg>
                            <div class="s-tooltip">
                                <span>ایجاد کپی</span>
                            </div>
                        </div>
                    </button>
                @endif
            @elseif($action['type'] == 'restore')
                @if($trashed)
                    <button
                        wire:click="restore({{ $model->id }})"
                        class="bg-warning parnas-data d-flex align-items-center justify-content-center ml-5"
                        style="border-radius: 10px;width:35px;height:35px">
                        <div class="image tooltip d-flex cursor-pointer">
                            <svg width="20" height="20"
                                 viewBox="0 0 47 47" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path

                                    d="M19.75 36.4984L19.042 35.7922L18.3375 36.4984L19.042 37.2046L19.75 36.4984ZM26.6912 28.1239L19.042 35.7922L20.458 37.2046L28.1072 29.5363L26.6912 28.1239ZM19.042 37.2046L26.6912 44.873L28.1072 43.4605L20.458 35.7922L19.042 37.2046Z"
                                    fill="#fff"/>
                                <path
                                    d="M11.9781 29.7895C10.5048 27.2312 9.91464 24.257 10.2993 21.3281C10.6839 18.3993 12.0218 15.6795 14.1055 13.5907C16.1891 11.5018 18.9021 10.1606 21.8236 9.77496C24.7452 9.38937 27.712 9.98098 30.264 11.458C32.8159 12.9351 34.8104 15.215 35.9381 17.9443C37.0657 20.6735 37.2636 23.6995 36.5009 26.553C35.7382 29.4064 34.0577 31.9279 31.7199 33.7262C29.382 35.5245 26.5176 36.4993 23.5709 36.4993"
                                    stroke="#fff" stroke-width="2"
                                    stroke-linecap="round"/>
                            </svg>
                            <div class="s-tooltip">
                                <span>بازگردانی</span>
                            </div>
                        </div>
                    </button>
                @endif

            @elseif($action['type'] == 'comment')
                {{--        {{ route('panel.comments.index', ['post' => $post->id, 'type' => $post_type]) }}--}}
                <a href="#"
                   class="bg-info parnas-data d-flex align-items-center justify-content-center ml-5"
                   style="border-radius: 10px;width:35px;height:35px">
                    <div class="image tooltip d-flex cursor-pointer">
                        <svg width="18" height="18"
                             viewBox="0 0 32 32" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.5176 4.65713V4.65713C24.2841 4.65713 24.6673 4.65713 24.9848 4.72677C26.1285 4.97757 27.0218 5.87083 27.2726 7.0145C27.3422 7.33204 27.3422 7.71528 27.3422 8.48174L27.3422 11.3254C27.3422 11.7969 27.3422 12.0326 27.1958 12.179C27.0493 12.3255 26.8136 12.3255 26.3422 12.3255L19.693 12.3255M23.5176 4.65713V4.65713C22.7511 4.65713 22.3679 4.65713 22.0504 4.72677C20.9067 4.97757 20.0134 5.87083 19.7626 7.0145C19.693 7.33204 19.693 7.71528 19.693 8.48174L19.693 12.3255M23.5176 4.65713L8.39453 4.65713C6.50891 4.65713 5.5661 4.65713 4.98032 5.24292C4.39453 5.8287 4.39453 6.77151 4.39453 8.65713L4.39453 27.6621L8.21914 26.3841L12.0438 27.6621L15.8684 26.3841L19.693 27.6621L19.693 12.3255"
                                stroke="#fff" stroke-width="2"/>
                            <path d="M9.49609 9.76953L14.5956 9.76953"
                                  stroke="#fff" stroke-width="2"
                                  stroke-linecap="round"/>
                            <path d="M10.7695 14.8809H9.49148" stroke="#fff"
                                  stroke-width="2" stroke-linecap="round"/>
                            <path d="M9.49609 19.9922L13.3207 19.9922"
                                  stroke="#fff" stroke-width="2"
                                  stroke-linecap="round"/>
                        </svg>
                        <div class="s-tooltip">
                            <span>دیدگاه ها</span>
                        </div>
                    </div>
                </a>
            @elseif($action['type'] == 'delete' && (isset($action['showWhen']) ? $action['showWhen']($model) : true))
                <button
                    wire:click="destroy({{ $model->id }})"
                    class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                    style="border-radius: 10px;width:35px;height:35px">
                    <div class="image tooltip d-flex cursor-pointer">
                        <svg width="20" height="20" viewBox="0 0 31 31"
                             fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.7852 19.2988L12.7852 15.4647"
                                  stroke="#fff" stroke-width="2"
                                  stroke-linecap="round"/>
                            <path d="M17.8828 19.2988L17.8828 15.4647"
                                  stroke="#fff" stroke-width="2"
                                  stroke-linecap="round"/>
                            <path
                                d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                stroke="#fff" stroke-width="2"
                                stroke-linecap="round"/>
                            <path
                                d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                stroke="#fff" stroke-width="2"
                                stroke-linecap="round"/>
                        </svg>
                        <div class="s-tooltip">
                            <span>حذف</span>
                        </div>
                    </div>
                </button>
            @elseif($action['type'] == 'show_more')
                <button
                    @click="$dispatch('openModal' , {component: 'panel.utils.show_more-modal' , arguments: {item: @js($action['item'] ?? []) , data: @js($action['data']($model))}})"
                    class="bg-info parnas-data d-flex align-items-center justify-content-center ml-5"
                    style="border-radius: 10px;width:35px;height:35px">
                    <div class="image tooltip d-flex cursor-pointer">
                        <x-utils.icons icon="eye" fill="#fff" width="20" height="20" />
                        <div class="s-tooltip">
                            <span>نمایش بیشتر</span>
                        </div>
                    </div>
                </button>
            @endif
        @endcan
    @endempty

@endforeach


