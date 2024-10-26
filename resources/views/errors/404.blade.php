<x-layouts.app>
    <div class="not-found flex flex-col items-center justify-center">
        <img width="300" src="/img/view/png/404.png" alt="">
        <h2 class="text-2xl extraBold">صفحه موردنظر پیدا نشد!</h2>
        <p class="text-gray leading-6 max-[600px]:w-11/12 text-small w-2/6 text-normal text-center mt-4 medium">
            ممکن است این صفحه حذف شده باشد و یا آدرس آن را اشتباه وارد کرده باشید.
            <br>
            از دکمه زیر جهت بازگشت به صفحه اصلی فروشگاه ساز باهوش استفاده کنید !
        </p>
        <x-buttons.home.button href="/"
                               class="bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-8 w-72 gap-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="21" viewBox="0 0 29.177 26.746">
                <path id="fi-rr-window-alt"
                      d="M23.1,1H6.079A6.081,6.081,0,0,0,0,7.079V21.667a6.081,6.081,0,0,0,6.079,6.079H23.1a6.081,6.081,0,0,0,6.079-6.079V7.079A6.081,6.081,0,0,0,23.1,1ZM6.079,3.431H23.1a3.658,3.658,0,0,1,3.647,3.647V9.51H2.431V7.079A3.658,3.658,0,0,1,6.079,3.431ZM23.1,25.315H6.079a3.658,3.658,0,0,1-3.647-3.647V11.942H26.746v9.726A3.658,3.658,0,0,1,23.1,25.315ZM21.883,6.471a1.824,1.824,0,1,1,1.824,1.824A1.821,1.821,0,0,1,21.883,6.471Zm-4.863,0a1.824,1.824,0,1,1,1.824,1.824A1.821,1.821,0,0,1,17.02,6.471Zm-4.863,0a1.824,1.824,0,1,1,1.824,1.824A1.821,1.821,0,0,1,12.157,6.471Z"
                      transform="translate(0 -1)" fill="#fff"/>
            </svg>
            بازگشت به باهوش
        </x-buttons.home.button>

    </div>
</x-layouts.app>
