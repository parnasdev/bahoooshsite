<div class="box-design sticky-notification mr-12" x-data="{
    mini: $persist(false),
    init() {
        if (this.mini) {
            this.toggleSideBar()
        }
    },
    toggleSideBar() {
        $('.right').toggleClass('visible');
        $('.left').toggleClass('block-row');
        $('.sidebar-taskbar').toggleClass('visible-sidebarmini');
        $('.show-taskbar').toggle();
        $('.mini-sidebar').toggle();
        $('.c-left').toggleClass('r-left');
        $('.c-right').toggleClass('r-right');
        $('.left').toggleClass('pb-70');
    }
}">
    {{-- notification --}}
    <div class="notification d-flex justify-content-between flex-100 py-10 px-20 radius-0 isDesktop">
        {{-- child --}}
        <div class="info-detail d-flex align-items-center flex-40">
            {{-- maximum --}}
            <div class="maximum-cl maximum-detail tooltip cursor-pointer" @click="toggleSideBar();mini = !mini">
                <svg width="17" height="17" viewBox="0 0 34 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1.7 0C1.36377 0 1.0351 0.0977484 0.755532 0.280884C0.475968 0.46402 0.258075 0.724318 0.129406 1.02886C0.000736579 1.3334 -0.0329291 1.66852 0.0326658 1.99182C0.0982607 2.31512 0.26017 2.61209 0.497919 2.84518C0.735669 3.07826 1.03858 3.237 1.36835 3.30131C1.69812 3.36562 2.03993 3.33261 2.35056 3.20647C2.6612 3.08032 2.9267 2.8667 3.1135 2.59262C3.3003 2.31853 3.4 1.9963 3.4 1.66667C3.4 1.22464 3.22089 0.800716 2.90208 0.488156C2.58327 0.175595 2.15087 0 1.7 0ZM8.5 3.33333H32.3C32.7509 3.33333 33.1833 3.15774 33.5021 2.84518C33.8209 2.53262 34 2.10869 34 1.66667C34 1.22464 33.8209 0.800716 33.5021 0.488156C33.1833 0.175595 32.7509 0 32.3 0H8.5C8.04913 0 7.61673 0.175595 7.29792 0.488156C6.97911 0.800716 6.8 1.22464 6.8 1.66667C6.8 2.10869 6.97911 2.53262 7.29792 2.84518C7.61673 3.15774 8.04913 3.33333 8.5 3.33333ZM8.5 8.33333C8.16377 8.33333 7.8351 8.43108 7.55553 8.61422C7.27597 8.79735 7.05807 9.05765 6.92941 9.36219C6.80074 9.66674 6.76707 10.0018 6.83267 10.3251C6.89826 10.6485 7.06017 10.9454 7.29792 11.1785C7.53567 11.4116 7.83858 11.5703 8.16835 11.6346C8.49812 11.699 8.83993 11.6659 9.15056 11.5398C9.4612 11.4137 9.7267 11.2 9.9135 10.926C10.1003 10.6519 10.2 10.3296 10.2 10C10.2 9.55797 10.0209 9.13405 9.70208 8.82149C9.38327 8.50893 8.95087 8.33333 8.5 8.33333ZM15.3 16.6667C14.9638 16.6667 14.6351 16.7644 14.3555 16.9475C14.076 17.1307 13.8581 17.391 13.7294 17.6955C13.6007 18.0001 13.5671 18.3352 13.6327 18.6585C13.6983 18.9818 13.8602 19.2788 14.0979 19.5118C14.3357 19.7449 14.6386 19.9037 14.9683 19.968C15.2981 20.0323 15.6399 19.9993 15.9506 19.8731C16.2612 19.747 16.5267 19.5334 16.7135 19.2593C16.9003 18.9852 17 18.663 17 18.3333C17 17.8913 16.8209 17.4674 16.5021 17.1548C16.1833 16.8423 15.7509 16.6667 15.3 16.6667ZM32.3 8.33333H15.3C14.8491 8.33333 14.4167 8.50893 14.0979 8.82149C13.7791 9.13405 13.6 9.55797 13.6 10C13.6 10.442 13.7791 10.8659 14.0979 11.1785C14.4167 11.4911 14.8491 11.6667 15.3 11.6667H32.3C32.7509 11.6667 33.1833 11.4911 33.5021 11.1785C33.8209 10.8659 34 10.442 34 10C34 9.55797 33.8209 9.13405 33.5021 8.82149C33.1833 8.50893 32.7509 8.33333 32.3 8.33333ZM32.3 16.6667H22.1C21.6491 16.6667 21.2167 16.8423 20.8979 17.1548C20.5791 17.4674 20.4 17.8913 20.4 18.3333C20.4 18.7754 20.5791 19.1993 20.8979 19.5118C21.2167 19.8244 21.6491 20 22.1 20H32.3C32.7509 20 33.1833 19.8244 33.5021 19.5118C33.8209 19.1993 34 18.7754 34 18.3333C34 17.8913 33.8209 17.4674 33.5021 17.1548C33.1833 16.8423 32.7509 16.6667 32.3 16.6667Z"
                        fill="#111" fill-opacity="1"></path>
                </svg>
                {{-- <span class="s-tooltip right_tooltip">
                    نوار کناری
                </span> --}}
            </div>
            <!--? text  -->
            <div class="text pr-20">
                <div class="text">
                    <span class="f-14 f-bold">پنل مدیریت</span>
                    <div class="text time">
                        <span class="f-14 f-bold text-de">{{ $greeting }}; امروز
                            {{ jdate()->format('%A %d %B') }}</span>
                        <span class="f-14 f-bold text-de">ساعت {{ jdate()->format('H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- child --}}
        <div class="info-detail d-flex align-items-center justify-content-end flex-25 isDesktop">
            <div class="image parnas-data tooltip ml-10 d-flex justify-content-center align-items-center radius-5 cursor-pointer"
                style="height: 35px">
                <div class="image parnas-data d-flex align-items-center justify-content-center bg-e1 radius-100"
                    style="width: 20px;height: 20px;">
                    <a  class="d-flex align-items-center">
                        <div class="self-color bg-danger radius-100" style="width: 20px;height:20px;display:none">
                        </div>
                    </a>
                </div>
                <span class="s-tooltip bottom_tooltip">
                    رخداد ها
                </span>
            </div>
            <div class="image parnas-data tooltip ml-10 d-flex justify-content-center align-items-center radius-5 cursor-pointer"
                style="height: 35px">
                <div class="image d-flex align-items-center justify-content-center bg-e1 radius-100"
                    style="width: 20px;height: 20px;">
                    <a href="https://wa.me/+989354433706" class="d-flex align-items-center">
                        <div class="self-color bg-success radius-100" style="width: 20px;height:20px;display:none">
                        </div>
                    </a>
                </div>
                <span class="s-tooltip bottom_tooltip">
                    واتس اپ
                </span>
            </div>
            <div class="image parnas-data tooltip ml-10 d-flex justify-content-center align-items-center radius-5 cursor-pointer"
                style="height: 35px">
                <div class="image d-flex align-items-center justify-content-center bg-e1 radius-100"
                    style="width: 20px;height: 20px;">
                    <a href="https://parnas.agency/" target="_blank" class="d-flex align-items-center"
                        style="display: none">
                        <div class="self-color bg-pallete-2 radius-100" style="width: 20px;height:20px;display:none">
                        </div>
                    </a>
                </div>
                <span class="s-tooltip bottom_tooltip">
                    آژانس خلاقیت پارناس
                </span>
            </div>
        </div>
    </div>
</div>
