<div>
    <div
        class="main-data flex-100 d-flex align-items-start m-align-items-stretch justify-content-between mx-10 mb-5 mt-13">
        <div class="flex-100">
            <div>
                {{-- row data --}}
                <div class="mb-15">
                    <div class="c-data">
                        <div class="p-table p-0">
                            {{-- filter --}}
                            <div class="controller-filters mt-10 pr-5 m-pr-0">
                                {{-- search --}}
                                <div class="filters d-flex flex-wrap align-items-center justify-content-between mb-10">
                                    <div
                                        class="c-filters flex-70 m-flex-100 d-flex align-items-center justify-content-start m-justify-content-between m-mb-10">
                                        @foreach($this->filters() as $filter)
                                            <div class="{{$filter['column_class']}}">
                                                <x-dynamic-component :component="$filter['component']"
                                                                     wire:model.live="{{ $filter['model'] }}"
                                                                     :class="$filter['class']"
                                                                     :placeholder="$filter['placeholder']"
                                                                     :label="$filter['label']"
                                                                     :icon="$filter['icon']"
                                                                     :options="$filter['options'] ?? null"
                                                />
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- group button --}}
                                    <div class="flex-29 m-flex-100 d-flex flex-wrap justify-content-end">
                                        {{-- show delete data --}}
                                        <div class="d-flex align-items-center">
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
                                </div>
                            </div>
                            <div class="dark-theme box-design bg-white px-10 py-14 pos-relative">
                                {{-- list --}}
                                <div
                                    class="main-data d-flex align-items-center m-align-items-stretch justify-content-between pb-3">
                                    {{-- title --}}
                                    <div class="rx-title">
                                        <div class="title d-flex align-items-center pb-10 pr-7">
                                            <div class="text">
                                                <h4>لیست {{ __($cat_type) }} ها</h4>
                                            </div>
                                            <div class="result pos-relative right-4">
                                                <span
                                                    class="d-flex align-items-center justify-content-center f-15 bg-parnas text-white px-8"
                                                    style="border-radius:5px;">{{ $categories->total() }}</span>
                                            </div>
                                            <div class="p-rx">
                                                <div class="rx-border-rectangle"></div>
                                                <div class="rx-border-rectangle-after"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-75 m-flex-100 d-flex align-items-center justify-content-end m-justify-content-start">

                                        @foreach($this->actions() as $action)
                                            @if($action['type'] == 'create_btn')
                                                <x-dynamic-component :component="$action['component']"
                                                                     :route="$action['route']" :can="$action['can']"/>
                                            @elseif($action['type'] == 'trash_btn')
                                                <x-dynamic-component :component="$action['component']"
                                                                     :trash="$action['trash']" :can="$action['can']"/>
                                            @elseif($action['type'] == 'action_select')
                                                <x-dynamic-component :component="$action['component']"
                                                                     :trash="$action['trash']"
                                                                     wire:model.live="{{ $action['wire:model'] }}"
                                                                     :can="$action['can']"/>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                {{-- table --}}
                                <div class="my-10">
                                    <!-- parent -->
                                    <div class="p-table p-0">
                                        <!--! table  -->
                                        <div class="controller-table pr-3 my-15">
                                            <!--? t-head of parents table -->
                                            <div class="d-thead">
                                                <div class="head flex-10 m-flex-23">
                                                    <span class="f-14 f-bold">شناسه</span>
                                                </div>
                                                <div class="head flex-20 m-flex-30">
                                                    <span class="f-14 f-bold">تصویر</span>
                                                </div>
                                                <div class="head flex-26 m-flex-40">
                                                    <span class="f-14 f-bold">نام</span>
                                                </div>
                                                <div class="head flex-15 m-flex-50">
                                                    <span class="f-14 f-bold">تعداد استفاده شده</span>
                                                </div>
                                                <div class="head sticky-table flex-28 m-flex-40">
                                                    <span class="f-14 f-bold">عملیات</span>
                                                </div>
                                            </div>
                                            <!--? details table  -->
                                            <div class="data">
                                                @forelse($categories as $category)
                                                    <div>
                                                        <!-- t-body of parents table -->
                                                        <div class="d-detail">
                                                            <div class="detail flex-10 m-flex-23">
                                                                <span class="f-14">{{ $category->id }}</span>
                                                            </div>
                                                            <div class="detail flex-20 m-flex-30">
                                                                @if($category->files()->first())
                                                                <img
                                                                    src="{{ $category->files()->first()->url ?? '/images/noPicture.png' }}"
                                                                    alt=""/>
                                                                @endif
                                                            </div>
                                                            <div class="detail flex-26 m-flex-40">
                                                                <span class="f-14">{{ $category->name }}</span>
                                                            </div>
                                                            <div class="detail flex-15 m-flex-50">
                                                                <span class="f-14">{{ $category->posts()->count() }}</span>
                                                            </div>
                                                            <div class="detail sticky-table flex-28 m-flex-40">
                                                                <a href="{{ route('panel.categories.edit', ['id' => $category->id, 'cat_type' => $cat_type, 'post_type' => $post_type]) }}"
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
                                                                <button wire:click="destroy({{ $category->id }})"
                                                                        class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                        style="border-radius: 10px;width:35px;height:35px">
                                                                    <div class="image tooltip d-flex cursor-pointer">
                                                                        <svg width="20" height="20" viewBox="0 0 31 31"
                                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M12.7852 19.2988L12.7852 15.4647" stroke="#fff"
                                                                                  stroke-width="2" stroke-linecap="round"/>
                                                                            <path d="M17.8828 19.2988L17.8828 15.4647" stroke="#fff"
                                                                                  stroke-width="2" stroke-linecap="round"/>
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
                                                                @if(!$category->categories()->get()->isEmpty())
                                                                    <div class="d-flex align-items-center"
                                                                         style="position: absolute; left: 10px;">
                                                                        <div class="ml-3">
                                                                            <!-- sub menu button -->
                                                                            <div
                                                                                class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                                                                                <button type="button"
                                                                                        @click="$dispatch('fillChildren', {parentId: @js($category->id)})">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                         width="11.905"
                                                                                         height="6.803" viewBox="0 0 11.905 6.803">
                                                                                        <path id="Down_Arrow_1"
                                                                                              data-name="Down Arrow 1"
                                                                                              d="M.249,1.452l5.1,5.1a.85.85,0,0,0,1.2,0l5.1-5.1a.85.85,0,1,0-1.2-1.2l-4.5,4.5-4.5-4.5a.85.85,0,0,0-1.2,1.2Z"
                                                                                              fill="#007bff"/>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <!-- show children -->
                                                        @if($showChildren == $category->id)
                                                            <div>
                                                                <!-- t-head of children table -->
                                                                <div class="d-thead">
                                                                    <div class="head flex-10 m-flex-23">
                                                                        <span class="f-14 f-bold">شناسه</span>
                                                                    </div>
                                                                    <div class="head flex-20 m-flex-30">
                                                                        <span class="f-14 f-bold">تصویر</span>
                                                                    </div>
                                                                    <div class="head flex-26 m-flex-40">
                                                                        <span class="f-14 f-bold">نام</span>
                                                                    </div>
                                                                    <div class="head flex-15 m-flex-50">
                                                                        <span class="f-14 f-bold">تعداد استفاده شده</span>
                                                                    </div>
                                                                    <div class="head sticky-table flex-28 m-flex-40">
                                                                        <span class="f-14 f-bold">عملیات</span>
                                                                    </div>
                                                                </div>
                                                                @forelse($children as $child)
                                                                    <div>
                                                                        <!-- t-body of children table -->
                                                                        <div class="d-detail">
                                                                            <div class="detail flex-10 m-flex-23"
                                                                                 style="background-color: #ededfd">
                                                                                <span class="f-14">{{ $child->id }}</span>
                                                                            </div>
                                                                            <div class="detail flex-20 m-flex-30"
                                                                                 style="background-color: #ededfd">
                                                                                @if($child->files()->first())
                                                                                <img
                                                                                    src="{{ $child->files()->first()->url }}"
                                                                                    alt=""/>
                                                                                @endif
                                                                            </div>
                                                                            <div class="detail flex-26 m-flex-40"
                                                                                 style="background-color: #ededfd">
                                                                                <span class="f-14">{{ $child->name }}</span>
                                                                            </div>
                                                                            <div class="detail flex-15 m-flex-50"
                                                                                 style="background-color: #ededfd">
                                                                    <span
                                                                        class="f-14">{{ $child->posts()->count() }}</span>
                                                                            </div>
                                                                            <div class="detail sticky-table flex-28 m-flex-40"
                                                                                 style="background-color: #ededfd">
                                                                                <a href="{{ route('panel.categories.edit', ['id' => $child->id, 'cat_type' => $cat_type, 'post_type' => $post_type]) }}"
                                                                                   class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                   style="border-radius: 10px;width:35px;height:35px">
                                                                                    <div
                                                                                        class="image tooltip d-flex cursor-pointer">
                                                                                        <svg width="20" height="20"
                                                                                             viewBox="0 0 47 47"
                                                                                             fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
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
                                                                                <button wire:click="destroy({{ $child->id }})"
                                                                                        class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                        style="border-radius: 10px;width:35px;height:35px">
                                                                                    <div
                                                                                        class="image tooltip d-flex cursor-pointer">
                                                                                        <svg width="20" height="20"
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
                                                                                @if(!$child->categories()->get()->isEmpty())
                                                                                    <div class="d-flex align-items-center"
                                                                                         style="position: absolute; left: 10px;">
                                                                                        <div class="ml-3">
                                                                                            <!-- sub menu -->
                                                                                            <div
                                                                                                class="d-flex flex-direction-column align-items-center justify-content-center m-auto">
                                                                                                <button type="button"
                                                                                                        @click="$dispatch('fillGrandchildren', {childId: @js($child->id)})">
                                                                                                    <svg
                                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                                        width="11.905"
                                                                                                        height="6.803"
                                                                                                        viewBox="0 0 11.905 6.803">
                                                                                                        <path id="Down_Arrow_1"
                                                                                                              data-name="Down Arrow 1"
                                                                                                              d="M.249,1.452l5.1,5.1a.85.85,0,0,0,1.2,0l5.1-5.1a.85.85,0,1,0-1.2-1.2l-4.5,4.5-4.5-4.5a.85.85,0,0,0-1.2,1.2Z"
                                                                                                              fill="#007bff"/>
                                                                                                    </svg>
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <!-- show grandchildren -->
                                                                        @if($showGrandchildren == $child->id)
                                                                            <div>
                                                                                <!-- t-head of grandchildren table -->
                                                                                <div class="d-thead">
                                                                                    <div class="head flex-10 m-flex-23">
                                                                                        <span class="f-14 f-bold">شناسه</span>
                                                                                    </div>
                                                                                    <div class="head flex-20 m-flex-30">
                                                                                        <span class="f-14 f-bold">تصویر</span>
                                                                                    </div>
                                                                                    <div class="head flex-26 m-flex-40">
                                                                                        <span class="f-14 f-bold">نام</span>
                                                                                    </div>
                                                                                    <div class="head flex-15 m-flex-50">
                                                                            <span
                                                                                class="f-14 f-bold">تعداد استفاده شده</span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="head sticky-table flex-28 m-flex-40">
                                                                                        <span class="f-14 f-bold">عملیات</span>
                                                                                    </div>
                                                                                </div>
                                                                                @forelse($grandchildren as $grandchild)
                                                                                    <!-- t-body of grandchildren table -->
                                                                                    <div class="d-detail">
                                                                                        <div class="detail flex-10 m-flex-23"
                                                                                             style="background-color: #bebefd">
                                                                                <span
                                                                                    class="f-14">{{ $grandchild->id }}</span>
                                                                                        </div>
                                                                                        <div class="detail flex-20 m-flex-30"
                                                                                             style="background-color: #bebefd">
                                                                                            @if($grandchild->files()->first())
                                                                                            <img
                                                                                                src="{{ $grandchild->files()->first()->url }}"
                                                                                                alt=""/>
                                                                                            @endif
                                                                                        </div>
                                                                                        <div class="detail flex-26 m-flex-40"
                                                                                             style="background-color: #bebefd">
                                                                        <span
                                                                            class="f-14">{{ $grandchild->name }}</span>
                                                                                        </div>
                                                                                        <div class="detail flex-15 m-flex-50"
                                                                                             style="background-color: #bebefd">
                                                                        <span
                                                                            class="f-14">{{ $grandchild->posts()->count() }}</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="detail sticky-table flex-28 m-flex-40"
                                                                                            style="background-color: #bebefd">
                                                                                            <a href="{{ route('panel.categories.edit', ['id' => $grandchild->id, 'cat_type' => $cat_type, 'post_type' => $post_type]) }}"
                                                                                               class="bg-primary parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                               style="border-radius: 10px;width:35px;height:35px">
                                                                                                <div
                                                                                                    class="image tooltip d-flex cursor-pointer">
                                                                                                    <svg width="20" height="20"
                                                                                                         viewBox="0 0 47 47"
                                                                                                         fill="none"
                                                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M12.0013 28.2652L12.0013 28.2652C11.9882 28.2783 11.9748 28.2917 11.961 28.3054C11.8092 28.4567 11.6171 28.6481 11.4806 28.8897C11.3441 29.1313 11.2793 29.3946 11.2281 29.6027C11.2234 29.6216 11.2189 29.64 11.2144 29.658L12.181 29.899L11.2144 29.658L9.6376 35.9809C9.63481 35.9921 9.63189 36.0037 9.62888 36.0158C9.59215 36.1623 9.54126 36.3652 9.5238 36.5448C9.5037 36.7515 9.49728 37.2035 9.86628 37.5721C10.2353 37.9406 10.6872 37.9337 10.8939 37.9133C11.0735 37.8956 11.2764 37.8445 11.4228 37.8076C11.4348 37.8046 11.4465 37.8017 11.4577 37.7989L11.2174 36.8403L11.4577 37.7989L17.7605 36.2192L17.7606 36.2192C17.7614 36.219 17.7622 36.2188 17.763 36.2186C17.7802 36.2143 17.7978 36.2099 17.8159 36.2055C18.0244 36.1539 18.2884 36.0886 18.5303 35.9513L18.0368 35.0815L18.5303 35.9513C18.7723 35.814 18.9637 35.6209 19.115 35.4684C19.1287 35.4545 19.1421 35.441 19.1552 35.4279L34.5653 19.9793L34.6037 19.9408C34.9025 19.6414 35.193 19.3503 35.4004 19.0779C35.6342 18.7707 35.8538 18.3733 35.8538 17.8606C35.8538 17.3479 35.6342 16.9505 35.4004 16.6434C35.193 16.371 34.9025 16.0799 34.6037 15.7804L34.5653 15.7419L31.6533 12.8227L31.6148 12.7841C31.3147 12.4831 31.0231 12.1906 30.7501 11.9819C30.4425 11.7466 30.044 11.5254 29.5293 11.5254C29.0147 11.5254 28.6162 11.7466 28.3085 11.9819C28.0356 12.1906 27.7439 12.4831 27.4438 12.7841C27.431 12.7969 27.4182 12.8098 27.4053 12.8227L12.0124 28.254L12.0124 28.254L12.0013 28.2652Z"
                                                                                                            stroke="#fff"
                                                                                                            stroke-width="2"/>
                                                                                                        <path
                                                                                                            d="M24.7461 14.9865L30.483 11.1523L36.2199 16.9036L32.3953 22.6548L24.7461 14.9865Z"
                                                                                                            fill="#fff"/>
                                                                                                    </svg>
                                                                                                    <div class="s-tooltip">
                                                                                                        <span>ویرایش</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                            <button
                                                                                                wire:click="destroy({{ $grandchild->id }})"
                                                                                                class="bg-danger parnas-data d-flex align-items-center justify-content-center ml-5"
                                                                                                style="border-radius: 10px;width:35px;height:35px">
                                                                                                <div
                                                                                                    class="image tooltip d-flex cursor-pointer">
                                                                                                    <svg width="20" height="20"
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
                                                                                                    <div class="s-tooltip">
                                                                                                        <span>حذف</span>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                @empty
                                                                                    <div class="d-detail placeholder-wave-reverse">
                                                                                        <div
                                                                                            class="detail flex-10 m-flex-23 placeholder"></div>
                                                                                        <div
                                                                                            class="detail flex-20 m-flex-30 placeholder"></div>
                                                                                        <div
                                                                                            class="detail flex-26 m-flex-40 placeholder"></div>
                                                                                        <div
                                                                                            class="detail flex-15 m-flex-50 placeholder"></div>
                                                                                        <div
                                                                                            class="detail flex-28 m-flex-40 sticky-table placeholder">
                                                                                        </div>
                                                                                    </div>
                                                                                @endforelse
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                @empty
                                                                    <div class="d-detail placeholder-wave-reverse">
                                                                        <div class="detail flex-10 m-flex-23 placeholder"></div>
                                                                        <div class="detail flex-20 m-flex-30 placeholder"></div>
                                                                        <div class="detail flex-26 m-flex-40 placeholder"></div>
                                                                        <div class="detail flex-15 m-flex-50 placeholder"></div>
                                                                        <div class="detail flex-28 m-flex-40 sticky-table placeholder">
                                                                        </div>
                                                                    </div>
                                                                @endforelse
                                                            </div>
                                                        @endif
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
                                                                            fill="white" stroke="#ca7e65" stroke-width="2.5"/>
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
                                        <!--! pagination  -->
                                        <div
                                            class="main-data p-pagination d-flex m-direction-column-reverse justify-content-between py-20 px-2">
                                            <!-- perpage  -->
                                            <div class="perpage m-mt-10">
                                                <div class="select c-s h-2percent-3rem mt-5 mr-3">
                                                    <select wire:model.live="perPage" class="radius-7">
                                                        @foreach ($perPages as $count)
                                                            <option>
                                                                {{ $count }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ul pagination -->
                                            {{ count($categories) > 0 ? $categories->links() : '' }}
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
