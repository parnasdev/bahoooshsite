@push('styles')
    <style>
        @media only screen and (max-width: 868px){
            .s-product-info-top .p-product-info-bottom .box-main-info-product .details-comment-user {
                flex-direction: column;
            }
            .s-product-info-top .p-product-info-bottom .box-main-info-product .details-comment-user .rate-parent {
                flex-direction: column;
                margin-top: 10px;
            }
            .s-product-info-top .p-product-info-bottom .box-main-info-product .box-ranking-rate {
                display: flex;
                flex-direction: column;
                margin-right: 12px;
                align-items: flex-start;
                width: 100%;
                margin-top: 15px !important;
            }
        }
    </style>
@endpush

<div>
    <div
        class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">

        <!--! c-right -->
        <div class="flex-100">
            <div class="mb-15">
                <div class="dark-theme box-design bg-white px-10 py-14 pos-relative">
                    <!--? row form  -->
                    <div class="c-data">
                        <!--! title  -->
                        <div class="main-data flex-100 d-flex justify-content-between">
                            <div class="rx-title pb-10 pt-7 pr-7">
                                <div class="text">
                                    <h4>دیدگاه ها</h4>
                                </div>
                                <div class="p-rx ">
                                    <div class="rx-border-rectangle"></div>
                                    <div class="rx-border-rectangle-after"></div>
                                </div>


                            </div>
                            <div class="c-group-btn d-flex flex-wrap justify-content-start m-mr-15">
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

                        <div class="our-service mt-10">
                            <!--? Head Cards -->
                            <div class="controller-head mb-9 scroller">
                                <!--? Header buttons -->
                                <div class="main-grid our">
                                    <div class="flex-services d-flex radius-6" x-data="{ status: @entangle('status').live }">
                                        <!--! button 1  -->
                                        <div class="our-services-card  flex-15 m-flex-45 px-7"
                                             :class="{ 'selected-services': status === 3 }"
                                             @click="status = 3">
                                            <!-- Title -->
                                            <div class="paragraph d-flex align-items-center">
                                                <span class="f-14 mr-7">همه نظرات</span>
                                            </div>
                                        </div>
                                        <!--! Button 2 -->
                                        <div class="our-services-card flex-15 m-flex-45 px-7"
                                             :class="{ 'selected-services': status === 1 }" @click="status = 1">
                                            <!-- Title -->
                                            <div class="paragraph d-flex align-items-center">
                                                <span class="f-14 mr-7">نظرات تایید شده</span>
                                            </div>
                                        </div>
                                        <!--! Button 3 -->
                                        <div class="our-services-card flex-15 m-flex-45 px-7"
                                             :class="{ 'selected-services': status === 0 }" @click="status = 0">
                                            <!-- Title -->
                                            <div class="paragraph d-flex align-items-center">
                                                <span class="f-14 mr-7">نظرات تایید نشده</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--? Details -->
                            <div class="section-details-our-services">
                                <div class="card">
                                    <!--! Detail 1 -->
                                    <div class="card-paragraph card-paragraph-image-odd" id="Card-1">
                                        <!-- parent  -->
                                        <div class="p-table p-0">
                                            <!--! table  -->
                                            <div class="controller-table">
                                                <!--? thead -->
                                                <div class="d-thead">
                                                    <div class="head flex-7 m-flex-15">
                                                        <span class="f-14 f-bold">شناسه</span>
                                                    </div>
                                                    <div class="head flex-17 m-flex-60">
                                                        <span class="f-14 f-bold">نام کاربر</span>
                                                    </div>
                                                    <div class="head flex-25 m-flex-60">
                                                        <span class="f-14 f-bold">عنوان پست</span>
                                                    </div>
                                                    <div class="head flex-15 m-flex-60">
                                                        <span class="f-14 f-bold">تاریخ ایجاد</span>
                                                    </div>
                                                    <div class="head flex-15 m-flex-60">
                                                        <span class="f-14 f-bold">وضعیت</span>
                                                    </div>
                                                    <div class="head flex-20 m-flex-70">
                                                        <span class="f-14 f-bold">عملیات</span>
                                                    </div>
                                                </div>
                                                <!--? tdetail  -->
                                                <div class="data">
                                                    <!--! (backend) loop data  -->
                                                    @forelse($comments as $key => $comment)
                                                        <div class="main-detail" x-data="{ show: false }">
                                                            <!--? child(n)  -->
                                                            <div class="d-detail">
                                                                <div class="detail flex-7 m-flex-15">
                                                                    <span class="f-14">{{ $comment->id }}</span>
                                                                </div>
                                                                <div class="detail flex-17 m-flex-60">
                                                                    <span class="f-14">
                                                                        {{-- @dd($comment) --}}
                                                                        @if (!empty($comment->user))
                                                                            {{ $comment->user->name }}
                                                                            {{ $comment->user->family }}
                                                                        @else
                                                                            {{ $comment->name }}
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <div class="detail flex-25 m-flex-60">
                                                                    <span class="f-14">
                                                                        <a target="_blank" class="f-13 text-info px-5 text-align-right pb-3" style="border-bottom: 1px dashed #17a2b8" href="{{ $comment->commentable->path() }}">{{ $comment->commentable->title }}</a>
                                                                    </span>
                                                                </div>
                                                                <div class="detail flex-15 m-flex-60">
                                                                    <span
                                                                        class="f-14">{{ jdate($comment->created_at)->format('Y-m-d H:i') }}</span>
                                                                </div>
                                                                <div class="detail flex-15 m-flex-60">
                                                                    <span
                                                                        class="f-14">{{ $comment->approved ? 'تایید شده' : 'تایید نشده' }}</span>
                                                                </div>
                                                                <div class="detail flex-20 m-flex-70">
                                                                    @if (!$comment->approved)
                                                                        <button
                                                                            wire:click="approvedMessage({{ $comment->id }})"
                                                                            class="bg-success parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                            style="border-radius: 10px;width:35px;height:35px">
                                                                            <div
                                                                                class="image tooltip d-flex cursor-pointer">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                     width="20" height="20"
                                                                                     viewBox="0 0 32 31" fill="none">
                                                                                    <path
                                                                                        d="M7.01653 17.9412L11.3479 21.1979C11.777 21.5205 12.3842 21.4468 12.7236 21.0309L23.5898 7.7168"
                                                                                        stroke="#fff" stroke-width="2"
                                                                                        stroke-linecap="round"/>
                                                                                </svg>
                                                                                <div class="s-tooltip">
                                                                                    <span>تایید</span>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    @endif
                                                                    <button wire:click="$dispatch('openModal' ,{component: 'panel.comments.comment-replay' ,arguments:{'incomment': {{ $comment->id }} } })"
                                                                            class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                            style="border-radius: 10px;width:35px;height:35px">
                                                                        <div
                                                                            class="image tooltip d-flex cursor-pointer">
                                                                            <svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    data-name="Path 876"
                                                                                    d="M12,1a32.232,32.232,0,0,1,5.855.4,6.542,6.542,0,0,1,3.19,1.352C22.437,3.977,23,6.2,23,10.667c0,2.881-.259,5-.955,6.383a3.32,3.32,0,0,1-1.29,1.44A4.392,4.392,0,0,1,18.5,19a5.171,5.171,0,0,0-2.995.8A5.373,5.373,0,0,0,14,21.464l-.141.222a4.3,4.3,0,0,1-.7.944A1.572,1.572,0,0,1,12,23a1.572,1.572,0,0,1-1.156-.369,4.306,4.306,0,0,1-.7-.944L10,21.464A5.373,5.373,0,0,0,8.495,19.8,5.171,5.171,0,0,0,5.5,19a4.3,4.3,0,0,1-2.246-.521,3.4,3.4,0,0,1-1.3-1.469c-.7-1.4-.957-3.522-.957-6.344,0-4.415.562-6.638,1.959-7.88A6.567,6.567,0,0,1,6.15,1.412,31.34,31.34,0,0,1,12,1Z"
                                                                                    fill="none" stroke="#fff"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"></path>
                                                                                <circle
                                                                                    data-name="Ellipse 41"
                                                                                    cx="1" cy="1"
                                                                                    r="1"
                                                                                    transform="translate(7 10)"
                                                                                    fill="#fff"></circle>
                                                                                <circle
                                                                                    data-name="Ellipse 42"
                                                                                    cx="1" cy="1"
                                                                                    r="1"
                                                                                    transform="translate(11 10)"
                                                                                    fill="#fff"></circle>
                                                                                <circle
                                                                                    data-name="Ellipse 43"
                                                                                    cx="1" cy="1"
                                                                                    r="1"
                                                                                    transform="translate(15 10)"
                                                                                    fill="#fff"></circle>
                                                                            </svg>
                                                                            <div class="s-tooltip">
                                                                                <span>پاسخ</span>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                    <button
                                                                        wire:click="destroy({{ $comment->id }})"
                                                                        class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                        style="border-radius: 10px;width:35px;height:35px">
                                                                        <div
                                                                            class="image tooltip d-flex cursor-pointer">
                                                                            <svg width="20" height="20"
                                                                                 viewBox="0 0 31 31" fill="none"
                                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M12.7852 19.2988L12.7852 15.4647"
                                                                                    stroke="#fff" stroke-width="2"
                                                                                    stroke-linecap="round"/>
                                                                                <path
                                                                                    d="M17.8828 19.2988L17.8828 15.4647"
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
                                                                    @if($status == 3 || $status == 1)
                                                                        <button
                                                                            class="show-detail js-dropdown bg-info parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                            style="border-radius: 10px;width:35px;height:35px"
                                                                            @click="show = !show">
                                                                            <div
                                                                                class="image tooltip d-flex cursor-pointer">
                                                                                <svg width="20" height="20"
                                                                                     viewBox="0 0 32 32" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M16.1203 20.1016L16.8283 20.8078L16.1203 21.5175L15.4123 20.8078L16.1203 20.1016ZM24.4775 13.1395L16.8283 20.8078L15.4123 19.3953L23.0615 11.727L24.4775 13.1395ZM15.4123 20.8078L7.76309 13.1395L9.17906 11.727L16.8283 19.3953L15.4123 20.8078Z"
                                                                                        fill="#fff"/>
                                                                                </svg>
                                                                                <div class="s-tooltip">
                                                                                    <span>اطلاعات</span>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    @endif
                                                                    <button
                                                                        class="show-detail js-dropdown bg-success parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                        style="border-radius: 100px;width:27px;height:27px">
                                                                        <div class="d-flex cursor-pointer">
                                                                            <div class="text">
                                                                                <span
                                                                                    class="text-white">{{ $comment->comments()->count() }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <!--? sub detail  -->
                                                            @if($status == 3 || $status == 1)
                                                                <div class="sub-table nested-list px-20 py-10 scroller"
                                                                     x-show="show">
                                                                    <div class="scroller">
                                                                        <!--? thead -->
                                                                        <div class="d-thead">
                                                                            <div class="head flex-7 m-flex-15">
                                                                                <span class="f-14 f-bold">شناسه</span>
                                                                            </div>
                                                                            <div class="head flex-26 m-flex-30">
                                                                                <span
                                                                                    class="f-14 f-bold">نام کاربر</span>
                                                                            </div>
                                                                            <div class="head flex-22 m-flex-30">
                                                                            <span class="f-14 f-bold">تاریخ
                                                                                ایجاد</span>
                                                                            </div>
                                                                            <div class="head flex-22 m-flex-30">
                                                                                <span class="f-14 f-bold">وضعیت</span>
                                                                            </div>
                                                                            <div class="head flex-22 m-flex-35">
                                                                                <span class="f-14 f-bold">عملیات</span>
                                                                            </div>
                                                                        </div>
                                                                        <!--? tdetail  -->
                                                                        <div class="data">
                                                                            <!--! (backend) loop data  -->
                                                                            <div class="main-detail">
                                                                                @forelse($comment->comments()->get() as $child)
                                                                                    <!--? child(n)  -->
                                                                                    <div class="d-detail">
                                                                                        <div
                                                                                            class="detail flex-7 m-flex-15">
                                                                                        <span
                                                                                            class="f-14">{{ $child->id }}</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="detail flex-26 m-flex-25">
                                                                                        <span class="f-14">
                                                                                            @if (!is_null($child->user))
                                                                                                {{ $child->user->name }}
                                                                                                {{ $child->user->family }}
                                                                                            @else
                                                                                                {{ $child->name }}
                                                                                            @endif
                                                                                        </span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="detail flex-22 m-flex-30">
                                                                                        <span
                                                                                            class="f-14">{{ jdate($child->created_at)->format('Y-m-d H:i') }}</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="detail flex-22 m-flex-30">
                                                                                        <span
                                                                                            class="f-14">{{ $child->approved ? 'تایید شده' : 'تایید نشده' }}</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="detail flex-22 m-flex-35">
                                                                                            @if (!$child->approved)
                                                                                                <button
                                                                                                    wire:click="approvedMessage({{ $child->id }})"
                                                                                                    class="bg-success parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                                    style="border-radius: 10px;width:35px;height:35px">
                                                                                                    <div
                                                                                                        class="image tooltip d-flex cursor-pointer">
                                                                                                        <svg
                                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                                            width="20"
                                                                                                            height="20"
                                                                                                            viewBox="0 0 32 31"
                                                                                                            fill="none">
                                                                                                            <path
                                                                                                                d="M7.01653 17.9412L11.3479 21.1979C11.777 21.5205 12.3842 21.4468 12.7236 21.0309L23.5898 7.7168"
                                                                                                                stroke="#fff"
                                                                                                                stroke-width="2"
                                                                                                                stroke-linecap="round"/>
                                                                                                        </svg>
                                                                                                        <div
                                                                                                            class="s-tooltip">
                                                                                                            <span>تایید</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </button>
                                                                                            @endif
                                                                                            <button
                                                                                                wire:click="$dispatch('openModal' ,{component: 'tenant.panel.comments.comment-replay' ,arguments:{ 'incomment':{{ $child->id }} } })"
                                                                                                class="bg-info parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                                style="border-radius: 10px;width:35px;height:35px">
                                                                                                <div
                                                                                                    class="image tooltip d-flex cursor-pointer">
                                                                                                    <svg width="22"
                                                                                                         height="22"
                                                                                                         viewBox="0 0 31 31"
                                                                                                         fill="none"
                                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M19.4333 15.6532C19.4333 17.9267 17.5956 19.7655 15.3339 19.7655C13.0721 19.7655 11.2344 17.9267 11.2344 15.6532C11.2344 13.3798 13.0721 11.541 15.3339 11.541C17.5956 11.541 19.4333 13.3798 19.4333 15.6532Z"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="1">
                                                                                                        </path>
                                                                                                        <path
                                                                                                            d="M26.0082 14.5827C26.3908 15.0629 26.5821 15.3031 26.5821 15.6527C26.5821 16.0024 26.3908 16.2425 26.0082 16.7227C24.3283 18.8313 20.182 23.321 15.3332 23.321C10.4844 23.321 6.33814 18.8313 4.6582 16.7227C4.27562 16.2425 4.08432 16.0024 4.08432 15.6527C4.08432 15.3031 4.27562 15.0629 4.6582 14.5827C6.33814 12.4741 10.4844 7.98438 15.3332 7.98438C20.182 7.98438 24.3283 12.4741 26.0082 14.5827Z"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="1">
                                                                                                        </path>
                                                                                                    </svg>
                                                                                                    <div
                                                                                                        class="s-tooltip">
                                                                                                        <span>نمایش</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                            <button
                                                                                                wire:click="destroy({{ $child->id }})"
                                                                                                class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                                style="border-radius: 10px;width:35px;height:35px">
                                                                                                <div
                                                                                                    class="image tooltip d-flex cursor-pointer">
                                                                                                    <svg width="20"
                                                                                                         height="20"
                                                                                                         viewBox="0 0 31 31"
                                                                                                         fill="none"
                                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M12.7852 19.2988L12.7852 15.4647"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"/>
                                                                                                        <path
                                                                                                            d="M17.8828 19.2988L17.8828 15.4647"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"/>
                                                                                                        <path
                                                                                                            d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"/>
                                                                                                        <path
                                                                                                            d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"/>
                                                                                                    </svg>
                                                                                                    <div
                                                                                                        class="s-tooltip">
                                                                                                        <span>حذف</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                @empty
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
                                                                                @endforelse
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @empty
                                                            <div class="empty-data">
                                                                <div
                                                                    class="main-empty d-flex flex-direction-column align-items-center">
                                                                    <div class="image">
                                                                        <svg width="250" height="250"
                                                                             viewBox="0 0 250 200" fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                  clip-rule="evenodd"
                                                                                  d="M207 65C210.866 65 214 68.134 214 72C214 75.866 210.866 79 207 79H167C170.866 79 174 82.134 174 86C174 89.866 170.866 93 167 93H189C192.866 93 196 96.134 196 100C196 103.866 192.866 107 189 107H178.826C173.952 107 170 110.134 170 114C170 116.577 172 118.911 176 121C179.866 121 183 124.134 183 128C183 131.866 179.866 135 176 135H93C89.134 135 86 131.866 86 128C86 124.134 89.134 121 93 121H54C50.134 121 47 117.866 47 114C47 110.134 50.134 107 54 107H94C97.866 107 101 103.866 101 100C101 96.134 97.866 93 94 93H69C65.134 93 62 89.866 62 86C62 82.134 65.134 79 69 79H109C105.134 79 102 75.866 102 72C102 68.134 105.134 65 109 65H207ZM207 93C210.866 93 214 96.134 214 100C214 103.866 210.866 107 207 107C203.134 107 200 103.866 200 100C200 96.134 203.134 93 207 93Z"
                                                                                  fill="#f5f5f5"/>
                                                                            <path fill-rule="evenodd"
                                                                                  clip-rule="evenodd"
                                                                                  d="M153.672 64L162.974 131.843L163.809 138.649C164.079 140.842 162.519 142.837 160.327 143.107L101.766 150.297C99.5738 150.566 97.578 149.007 97.3088 146.814L88.2931 73.3868C88.1584 72.2904 88.9381 71.2925 90.0344 71.1579C90.0413 71.1571 90.0483 71.1563 90.0552 71.1555L94.9136 70.6105M98.8421 70.1698L103.429 69.6553L98.8421 70.1698Z"
                                                                                  fill="white"/>
                                                                            <path
                                                                                d="M154.91 63.8302C154.816 63.1463 154.186 62.6678 153.502 62.7616C152.818 62.8554 152.34 63.4859 152.433 64.1698L154.91 63.8302ZM162.974 131.843L164.214 131.69C164.214 131.685 164.213 131.679 164.212 131.673L162.974 131.843ZM97.3088 146.814L98.5495 146.662L97.3088 146.814ZM88.2931 73.3868L89.5337 73.2344L88.2931 73.3868ZM90.0552 71.1555L89.9159 69.9133L90.0552 71.1555ZM95.0529 71.8527C95.739 71.7758 96.2327 71.1572 96.1558 70.4712C96.0788 69.7851 95.4603 69.2913 94.7742 69.3683L95.0529 71.8527ZM98.7028 68.9276C98.0167 69.0046 97.5229 69.6231 97.5999 70.3092C97.6768 70.9952 98.2954 71.489 98.9814 71.412L98.7028 68.9276ZM103.568 70.8975C104.255 70.8205 104.748 70.202 104.671 69.5159C104.594 68.8299 103.976 68.3361 103.29 68.4131L103.568 70.8975ZM152.433 64.1698L161.735 132.013L164.212 131.673L154.91 63.8302L152.433 64.1698ZM161.733 131.995L162.569 138.801L165.05 138.497L164.214 131.69L161.733 131.995ZM162.569 138.801C162.754 140.309 161.682 141.681 160.174 141.866L160.479 144.347C163.357 143.994 165.403 141.375 165.05 138.497L162.569 138.801ZM160.174 141.866L101.614 149.056L101.919 151.538L160.479 144.347L160.174 141.866ZM101.614 149.056C100.107 149.241 98.7346 148.169 98.5495 146.662L96.0681 146.967C96.4215 149.845 99.0409 151.891 101.919 151.538L101.614 149.056ZM98.5495 146.662L89.5337 73.2344L87.0524 73.5391L96.0681 146.967L98.5495 146.662ZM89.5337 73.2344C89.4833 72.8233 89.7756 72.4491 90.1867 72.3986L89.8821 69.9173C88.1005 70.136 86.8336 71.7576 87.0524 73.5391L89.5337 73.2344ZM90.1867 72.3986C90.1893 72.3983 90.1919 72.398 90.1945 72.3977L89.9159 69.9133C89.9046 69.9145 89.8933 69.9159 89.8821 69.9173L90.1867 72.3986ZM90.1945 72.3977L95.0529 71.8527L94.7742 69.3683L89.9159 69.9133L90.1945 72.3977ZM98.9814 71.412L103.568 70.8975L103.29 68.4131L98.7028 68.9276L98.9814 71.412ZM103.29 68.4131L98.7028 68.9276L98.9814 71.412L103.568 70.8975L103.29 68.4131Z"
                                                                                fill="#ca7e65"/>
                                                                            <path fill-rule="evenodd"
                                                                                  clip-rule="evenodd"
                                                                                  d="M151.14 68.2692L159.56 129.753L160.317 135.921C160.561 137.908 159.167 139.715 157.203 139.956L104.761 146.395C102.798 146.636 101.008 145.22 100.764 143.233L92.6141 76.8568C92.4795 75.7605 93.2591 74.7626 94.3555 74.628L100.843 73.8314"
                                                                                  fill="#fff"/>
                                                                            <path
                                                                                d="M107.922 54C107.922 52.4812 109.153 51.25 110.672 51.25H156.229C156.958 51.25 157.657 51.5395 158.173 52.0549L171.616 65.4898C172.132 66.0056 172.422 66.7053 172.422 67.4349V130C172.422 131.519 171.191 132.75 169.672 132.75H110.672C109.153 132.75 107.922 131.519 107.922 130V54Z"
                                                                                fill="white" stroke="#ca7e65"
                                                                                stroke-width="2.5"/>
                                                                            <path
                                                                                d="M156.672 52.4028V64C156.672 65.6569 158.015 67 159.672 67H167.605"
                                                                                stroke="#ca7e65" stroke-width="2.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                            <path
                                                                                d="M118 118H144M118 67H144H118ZM118 79H161H118ZM118 92H161H118ZM118 105H161H118Z"
                                                                                stroke="#ca7e65" stroke-width="2.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"/>
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    @endforelse
                                                </div>
                                            </div>
                                            <!--! pagination  -->
                                            <div
                                                class="main-data p-pagination d-flex m-direction-column-reverse justify-content-between py-20 px-2">
                                                <!-- perpage  -->
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
                                                <!-- ul pagination -->
                                                {{ count($comments) > 0 ? $comments->links() : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
