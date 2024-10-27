<x-slot:pageClass>postsPage</x-slot:pageClass>
<div>
    <livewire:dynamic-component :is="$headerBlock->component_name" :key="$headerBlock->component_name" :block="$headerBlock"/>
    <div class="prs-container" x-data="{
        init() {
            const editorContent = $refs.content
            const titleList = $refs.titleList
            const headings = editorContent.querySelectorAll('h2 , h3');
            headings.forEach((heading, index) => {
                const id = `heading-${index + 1}`;
                heading.id = id;
                const listItem = document.createElement('li');
                const number = document.createElement('strong')
                const link = document.createElement('a');
                link.href = `#${id}`;
                link.textContent = heading.textContent;
                number.textContent = index + 1 + '.';
                number.classList.add('text-[17px]', 'max-[600px]:text-[15px]', 'bolX' ,'text-base')
                listItem.appendChild(number);
                link.classList.add('medium', 'text-[13px]')
                listItem.appendChild(link);
                listItem.classList.add('flex', 'mt-[12px]', 'justify-start', 'medium', 'text-[13px]', 'max-[600px]:text-[12px]', 'items-center', 'gap-2')
                titleList.appendChild(listItem);
            })
        }

    }">
        <div class="w-full items-center justify-start pt-3  flex-col">
            <div class="row-one mt-10">
                <div class="text-main max-[600px]:w-full flex gap-3 sm:w-full flex-col items-center w-1/2">
                    <h1 class="text sm:text-xl   md:text-xl lg:text-2xl xl:text-2xl extraBold">
                        {{ $post->title }}
                    </h1>
                    <div class="flex justify-center max-[600px]:w-full mt-2 items-center gap-2">
                        <div
                            class="label-date gap-3 relative text-white bolX text-small  flex items-center justify-center">
                            <svg class="right left-2" id="Calendar_2" data-name="Calendar 2"
                                 xmlns="http://www.w3.org/2000/svg" width="15" height="17"
                                 viewBox="0 0 20.998 22.748">
                                <path id="Path_839" data-name="Path 839" d="M6,16H9.713"
                                      transform="translate(-1.061 -2.001)" fill="none" stroke="#fff"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path id="Path_840" data-name="Path 840" d="M6,20H9.713"
                                      transform="translate(-1.061 -2.502)" fill="none" stroke="#fff"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <path id="Path_841" data-name="Path 841"
                                      d="M7,0a.875.875,0,0,1,.875.875v.95c.8-.052,1.669-.075,2.625-.075s1.828.023,2.625.075V.875a.875.875,0,1,1,1.75,0V2.006c3.994.6,5.536,2.4,5.978,6.743q.043.421.072.875.028.422.044.874.031.825.03,1.751T20.968,14q-.017.452-.044.875-.029.452-.072.872C20.379,20.4,18.647,22.129,14,22.6q-.42.043-.872.072-.423.028-.875.044-.825.031-1.75.03c-8.646,0-10.5-1.853-10.5-10.5q0-.927.03-1.751.017-.451.044-.874Q.1,9.17.147,8.749C.589,4.4,2.13,2.608,6.124,2.006V.875A.875.875,0,0,1,7,0ZM6.124,3.778a5.877,5.877,0,0,0-2.53.917c-.826.606-1.422,1.67-1.688,4.054H19.092C18.826,6.365,18.23,5.3,17.4,4.7a5.877,5.877,0,0,0-2.53-.917v.6a.875.875,0,1,1-1.75,0v-.8c-.76-.053-1.628-.08-2.625-.08s-1.865.027-2.625.08v.8a.875.875,0,1,1-1.75,0ZM18.834,15.8q.13-.017.256-.03c-.229,2.04-.7,3.1-1.336,3.738s-1.7,1.107-3.738,1.336q.013-.125.03-.256a5.772,5.772,0,0,1,1.447-3.341A5.772,5.772,0,0,1,18.834,15.8Zm-6.522,4.558c-.028.213-.049.418-.064.613-.541.021-1.123.031-1.748.031a23.538,23.538,0,0,1-4.908-.383A4.566,4.566,0,0,1,3.245,19.5a4.565,4.565,0,0,1-1.112-2.346,23.541,23.541,0,0,1-.383-4.908c0-.626.01-1.208.031-1.75H19.217c.021.542.031,1.124.031,1.75s-.01,1.207-.031,1.748c-.195.015-.4.036-.613.064A7.5,7.5,0,0,0,14.255,16,7.5,7.5,0,0,0,12.311,20.354Z"
                                      transform="translate(0 0)" fill="#fff" fill-rule="evenodd"/>
                            </svg>
                            تاریخ انتشار : {{ jdate($post->created_at)->format('d %B Y') }}
                        </div>
                        <div
                            class="label-view gap-3 relative text-black bolX text-small  flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="10"
                                 viewBox="0 0 22.652 13.5">
                                <g id="Show" transform="translate(-0.674 -0.25)">
                                    <path id="Path_1139" data-name="Path 1139"
                                          d="M1.652,6.555a.656.656,0,0,0,0,.89C3.37,9.392,7.229,13,12,13s8.63-3.608,10.348-5.555a.656.656,0,0,0,0-.89C20.63,4.608,16.771,1,12,1S3.37,4.608,1.652,6.555Z"
                                          fill="none" stroke="#181818" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="1.5"/>
                                    <circle id="Ellipse_58" data-name="Ellipse 58" cx="2" cy="2" r="2"
                                            transform="translate(14 9) rotate(180)" fill="none" stroke="#181818"
                                            stroke-width="1.5"/>
                                </g>
                            </svg>

                            تعداد بازدید مقاله : {{ $post->visits()->count() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-detail-blog gap-10 w-full my-12 max-[700px]:flex-col md:flex-col lg:flex-row md:items-center flex justify-between lg:items-start relative">
                <div class="sticky-row max-[700px]:w-full max-[700px]:relative md:relative md:w-[50%] lg:w-3/12 lg:sticky top-2">
                    <img class="img-blog-info w-full h-72 rounded-3xl " src="/img/view/png/kids-info-blog.png"
                         alt="">
                    <div class="w-full flex items-center gap-3 justify-start mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 19.609 19.609">
                            <g id="Menu" transform="translate(0.6 0.6)">
                                <path id="Path_1022" data-name="Path 1022"
                                      d="M1,4.766A10.255,10.255,0,0,0,1.166,6.9a1.934,1.934,0,0,0,.469.994,1.934,1.934,0,0,0,.994.469,10.254,10.254,0,0,0,2.137.166A10.254,10.254,0,0,0,6.9,8.365,1.934,1.934,0,0,0,7.9,7.9,1.934,1.934,0,0,0,8.365,6.9a10.254,10.254,0,0,0,.166-2.137,10.254,10.254,0,0,0-.166-2.137A1.934,1.934,0,0,0,7.9,1.635,1.934,1.934,0,0,0,6.9,1.166,10.255,10.255,0,0,0,4.766,1a10.255,10.255,0,0,0-2.137.166,1.934,1.934,0,0,0-.994.469,1.934,1.934,0,0,0-.469.994A10.255,10.255,0,0,0,1,4.766Z"
                                      transform="translate(-1 -1)" fill="none" stroke="#808285"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                <path id="Path_1023" data-name="Path 1023"
                                      d="M1,17.766A10.255,10.255,0,0,0,1.166,19.9a1.935,1.935,0,0,0,.469.994,1.934,1.934,0,0,0,.994.469,10.259,10.259,0,0,0,2.137.166A10.259,10.259,0,0,0,6.9,21.365,1.934,1.934,0,0,0,7.9,20.9a1.935,1.935,0,0,0,.469-.994,10.254,10.254,0,0,0,.166-2.137,10.254,10.254,0,0,0-.166-2.137,1.935,1.935,0,0,0-.469-.994,1.934,1.934,0,0,0-.994-.469A10.259,10.259,0,0,0,4.766,14a10.259,10.259,0,0,0-2.137.166,1.934,1.934,0,0,0-.994.469,1.935,1.935,0,0,0-.469.994A10.255,10.255,0,0,0,1,17.766Z"
                                      transform="translate(-1 -3.122)" fill="none" stroke="#808285"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                <path id="Path_1024" data-name="Path 1024"
                                      d="M14,4.766A10.259,10.259,0,0,0,14.166,6.9a1.934,1.934,0,0,0,.469.994,1.935,1.935,0,0,0,.994.469,10.254,10.254,0,0,0,2.137.166A10.254,10.254,0,0,0,19.9,8.365,1.935,1.935,0,0,0,20.9,7.9a1.934,1.934,0,0,0,.469-.994,10.259,10.259,0,0,0,.166-2.137,10.259,10.259,0,0,0-.166-2.137,1.934,1.934,0,0,0-.469-.994,1.935,1.935,0,0,0-.994-.469A10.255,10.255,0,0,0,17.766,1a10.255,10.255,0,0,0-2.137.166,1.935,1.935,0,0,0-.994.469,1.934,1.934,0,0,0-.469.994A10.259,10.259,0,0,0,14,4.766Z"
                                      transform="translate(-3.122 -1)" fill="none" stroke="#808285"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                                <path id="Path_1025" data-name="Path 1025"
                                      d="M14,17.766a10.259,10.259,0,0,0,.166,2.137,1.625,1.625,0,0,0,1.463,1.463,10.259,10.259,0,0,0,2.137.166,10.259,10.259,0,0,0,2.137-.166A1.625,1.625,0,0,0,21.365,19.9a10.259,10.259,0,0,0,.166-2.137,10.259,10.259,0,0,0-.166-2.137A1.625,1.625,0,0,0,19.9,14.166,10.259,10.259,0,0,0,17.766,14a10.259,10.259,0,0,0-2.137.166,1.625,1.625,0,0,0-1.463,1.463A10.259,10.259,0,0,0,14,17.766Z"
                                      transform="translate(-3.122 -3.122)" fill="none" stroke="#808285"
                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/>
                            </g>
                        </svg>
                        <span class="text-small bolX text-gray-s">{{ $categories }}</span>
                    </div>
                    @empty($banner)
                    @else
                        <a href="{{ $banner['link'] ?? '' }}" class="show-desktop w-full">
                            <img class="img-blog-info w-full" src="{{ asset($banner['path'] ?? '') }}" alt="{{ $banner['alt'] ?? '' }}">
                        </a>
                    @endempty

                </div>
                <div class="box max-[700px]:w-full w-9/12 flex items-start flex-col">
                    <div
                        class="box-editor flex flex-col items-center justify-start relative p-7 bg-white   rounded-3xl w-full">
                        <p>{{ $post->description }}</p>
                        <div class="w-full my-[2rem] flex justify-start">
                            <div
                                class="box-list shadow-md  flex flex-col items-start p-3 rounded-[30px] h-[250px] max-[600px]:h-auto max-[600px]:w-full md:w-[80%] lg:w-[60%]">
                                <div class="flex w-full border-box-list-title justify-start items-center gap-2">
                                    <div class="circle w-[7px] h-[7px] bg-base rounded-[50%]"></div>
                                    <h4 class="">فهرست عناوین</h4>
                                </div>
                                <ol class="pb-[1rem] pt-[8px]" x-ref="titleList">
{{--                                    <li class="flex mt-[12px] justify-start medium text-[13px] max-[600px]:text-[12px] items-center gap-2">--}}
{{--                                        <strong class="text-[17px] max-[600px]:text-[15px] bolX text-base">1.</strong>--}}
{{--                                        پذیرش در فرانسه--}}
{{--                                    </li>--}}
{{--                                    <li class="flex mt-[12px] justify-start medium text-[13px] max-[600px]:text-[12px] items-center gap-2">--}}
{{--                                        <strong class="text-[17px] max-[600px]:text-[15px] bolX text-base">2.</strong>--}}
{{--                                        نحوه انتخاب بین ورودی ژانویه و سپتامبر برای تحصیل در فرانسه--}}
{{--                                    </li>--}}
{{--                                    <li class="flex mt-[12px] justify-start medium text-[13px] max-[600px]:text-[12px] items-center gap-2">--}}
{{--                                        <strong class="text-[17px] max-[600px]:text-[15px] bolX text-base">3.</strong>--}}
{{--                                        کدام پذیرش برای دانشجویان بین المللی در فرانسه بهتر است؟--}}
{{--                                    </li>--}}
{{--                                    <li class="flex mt-[12px] justify-start medium text-[13px] max-[600px]:text-[12px] items-center gap-2">--}}
{{--                                        <strong class="text-[17px] max-[600px]:text-[15px] bolX text-base">4.</strong>--}}
{{--                                        نتیجه گیری ورودی پاییز در مقابل بهار در فرانسه--}}
{{--                                    </li>--}}
                                </ol>
                            </div>
                        </div>
                        <div class="box-editor flex flex-col items-center justify-start relative p-7 bg-white rounded-3xl w-full" x-ref="content">
                            {!! $post->body !!}
                        </div>

                    </div>
                    <div class="row-labels w-full flex items-center gap-2 justify-start my-4">
                        <div class="title gap-2 flex items-center justify-start">
                            <svg id="Hashtag" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                 viewBox="0 0 24 24">
                                <path id="Path_975" data-name="Path 975"
                                      d="M1,12a27.833,27.833,0,0,0,.462,5.827A6.193,6.193,0,0,0,3,21a6.193,6.193,0,0,0,3.172,1.54A27.838,27.838,0,0,0,12,23a27.838,27.838,0,0,0,5.827-.462A6.193,6.193,0,0,0,21,21a6.193,6.193,0,0,0,1.54-3.172A27.838,27.838,0,0,0,23,12a27.838,27.838,0,0,0-.462-5.827A6.193,6.193,0,0,0,21,3a6.193,6.193,0,0,0-3.172-1.54A27.833,27.833,0,0,0,12,1a27.833,27.833,0,0,0-5.827.462A6.193,6.193,0,0,0,3,3a6.193,6.193,0,0,0-1.54,3.172A27.833,27.833,0,0,0,1,12Z"
                                      fill="none" stroke="#d4d4d4" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                                <path id="Path_976" data-name="Path 976"
                                      d="M10,7v3m0,7V10m0,0h4m3,0H14m0,0v4m0,3V14m0,0H7" fill="none"
                                      stroke="#d4d4d4" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"/>
                            </svg>
                            <span class="text-light bolX text-small">برچسب :</span>
                        </div>
                        <div class="labels gap-1 flex items-center justify-start">
                            @foreach($tags as $tag)
                                <a class="text-light bolX text-small item" href="{{ $tag['path'] }}">{{ $tag['name'] . ($loop->last ? '' : ',') }}</a>
                            @endforeach
                        </div>
                    </div>
                    <livewire:bahooosh::components.comments.comment-list :model="$post" lazy />
                </div>
            </div>

        </div>
    </div>
    <livewire:dynamic-component :is="$footerBlock->component_name" :key="$footerBlock->component_name" :block="$footerBlock"/>
</div>
