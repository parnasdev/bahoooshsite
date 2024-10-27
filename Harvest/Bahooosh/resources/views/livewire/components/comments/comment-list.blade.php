<div class="w-full">
    <div class="row-users mt-4 relative max-[700px]:items-start w-full flex justify-between items-center">
        <div class="start flex flex-col max-[700px]:w-full items-start w-2/3">
            <h4 class="bolX text-base text-md">نظرات کاربران</h4>
            <span class="text-gray-s text-small medium mt-4">دقت کنید</span>
            <div class="p-tip mt-4 flex flex-col items-start gap-3">
                {{--                                <div class="tip flex gap-3 justify-start items-center">--}}
                {{--                                    <div class="circle"></div>--}}
                {{--                                    <span class="text-small">ابتدا در سایت ثبت نام یا ورود کنید.</span>--}}
                {{--                                </div>--}}
                <div class="tip flex gap-3 justify-start items-center">
                    <div class="circle"></div>
                    <span class="text-small">اگر در مورد نحوه مشاوره و مسائل مربوطه سوال دارید تماس بگیرید.</span>
                </div>
                <div class="tip flex gap-3 justify-start items-center">
                    <div class="circle"></div>
                    <span class="text-small">جهت حفظ امنیت در این قسمت صبور باشید !</span>
                </div>
            </div>

        </div>
        <div
            class="end flex max-[600px]:absolute max-[600px]:left-0 max-[600px]:bottom-20 flex-col items-end">
            <div
                class="box-rate max-[600px]:bg-transparent  rounded-md flex mt-4 flex-col items-center justify-center">
                <strong class="text-3xl bolX">{{ $avgRate }}</strong>
                <div class="p-star mt-4 flex justify-center w-full gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                         viewBox="0 0 21.262 21.259">
                        <path id="Star"
                              d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                              transform="translate(-1 -1)" fill="{{ $avgRate >= 5 ? '#ffcd00' : '#E5E5E5' }}"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                         viewBox="0 0 21.262 21.259">
                        <path id="Star"
                              d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                              transform="translate(-1 -1)" fill="{{ $avgRate >= 4 ? '#ffcd00' : '#E5E5E5' }}"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                         viewBox="0 0 21.262 21.259">
                        <path id="Star"
                              d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                              transform="translate(-1 -1)" fill="{{ $avgRate >= 3 ? '#ffcd00' : '#E5E5E5' }}"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                         viewBox="0 0 21.262 21.259">
                        <path id="Star"
                              d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                              transform="translate(-1 -1)" fill="{{ $avgRate >= 2 ? '#ffcd00' : '#E5E5E5' }}"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                         viewBox="0 0 21.262 21.259">
                        <path id="Star"
                              d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                              transform="translate(-1 -1)" fill="{{ $avgRate >= 1 ? '#ffcd00' : '#E5E5E5' }}"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="row-users mt-4 w-full flex justify-between items-center">
        <span class="medium  text-gray text-normal">نظر خود را به اشتراک بگذارید :</span>
        <x-buttons.home.button wire:click="$dispatch('openModal', { component: 'bahooosh::components.comments.comment-modal', arguments: { modelId: {{ $model->id }}}})"
            class="bg-black text-white hover:bg-white hover:text-black border-2 border-black  w-56 max-[600px]:w-32 gap-5">
            شما هم نظری بنویسید !
        </x-buttons.home.button>
    </div>
    @foreach($comments as $comment)
        <div class="row-question w-full flex mt-12">
            <div class="box p-6 bg-white w-full flex flex-col items-start">
                <div class="top flex gap-4 items-center">
                    <img width="60" src="/img/view/png/avatar.png" alt="">
                    <div class="detail-user flex flex-col items-start">
                        <div class="flex gap-2 items-center">
                            <h4 class="bolX mt-1 name-user text-normal">{{ empty($comment->user_id) ?  $comment->name : $comment->user?->name}}</h4>
                            <div class="p-star flex justify-center w-full gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 21.262 21.259">
                                    <path id="Star"
                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                          transform="translate(-1 -1)" fill="{{ $comment->rate >= 5 ? '#ffcd00' : '#E5E5E5' }}"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 21.262 21.259">
                                    <path id="Star"
                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                          transform="translate(-1 -1)" fill="{{ $comment->rate >= 4 ? '#ffcd00' : '#E5E5E5' }}"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 21.262 21.259">
                                    <path id="Star"
                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                          transform="translate(-1 -1)" fill="{{ $comment->rate >= 3 ? '#ffcd00' : '#E5E5E5' }}"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 21.262 21.259">
                                    <path id="Star"
                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                          transform="translate(-1 -1)" fill="{{ $comment->rate >= 2 ? '#ffcd00' : '#E5E5E5' }}"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                     viewBox="0 0 21.262 21.259">
                                    <path id="Star"
                                          d="M11.661,1c1,0,2.572,4.542,3.139,6.288a1,1,0,0,0,.919.691c1.822.062,6.543.325,6.543,1.392,0,1.052-3.364,3.7-4.74,4.733a1,1,0,0,0-.349,1.107c.56,1.733,1.9,6.228,1.042,6.937s-4.481-2.061-5.956-3.24a1,1,0,0,0-1.254,0c-1.476,1.179-5.106,3.939-5.9,3.241s.471-5.219,1-6.946a1,1,0,0,0-.354-1.09C4.382,13.08,1,10.425,1,9.371s4.731-1.33,6.549-1.392A1,1,0,0,0,8.465,7.3C9.045,5.554,10.659,1,11.661,1Z"
                                          transform="translate(-1 -1)" fill="{{ $comment->rate >= 1 ? '#ffcd00' : '#E5E5E5' }}"/>
                                </svg>
                            </div>
                        </div>
                        <span class="date mt-1 text-base bolX">{{ jdate($comment->created_at)->ago() }}</span>
                    </div>
                </div>
                <div class="bottom w-full mt-5">
                    <p class="text-small text">{{ $comment->body }}</p>
                </div>
            </div>
        </div>

        @foreach($comment->comments as $reply)
            <div class="row-answer w-full flex justify-end mt-3">
                <div class="box p-6 w-full flex flex-col items-start">
                    <div class="top w-full flex gap-4 items-center">
                        <img width="60" src="/img/view/png/avatar.png" alt="">
                        <div class="detail-user flex flex-col items-start">
                            <div class="flex gap-2 items-center">
                                <h4 class="bolX mt-1 name-user text-normal">{{ empty($reply->user_id) ?  $reply->name : $reply->user?->name}}</h4>
                            </div>
                            <span class="date mt-1 text-base bolX">{{ jdate($reply->created_at)->ago() }}</span>
                        </div>
                    </div>
                    <div class="bottom w-full mt-3">
                        <p class="text-small text">
                            {{ $reply->body }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    @endforeach

</div>
