<div>
    @if(!$is_edit)
        <header class="header-row w-full py-[2rem] flex justify-between items-center">
            <div class="min-[701px]:w-[11%] max-[700px]:hidden"></div>
            <a href="/" class="logo">
                <img class="object-contain w-[220px] max-[600px]:w-[140px]" src="{{ asset(getValue('siteLogos')) }}" alt="">
            </a>
            <a href="/" class="back-home text-[13px] text-gray-s bolX flex gap-3 items-center">
                بازگشت به خانه
                <svg class="mb-[3px]" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                     viewBox="0 0 28.889 28.889">
                    <path id="fi-rr-angle-square-left"
                          d="M0,22.871V6.019A6.026,6.026,0,0,1,6.019,0H22.871a6.026,6.026,0,0,1,6.019,6.019V22.871a6.026,6.026,0,0,1-6.019,6.019H6.019A6.026,6.026,0,0,1,0,22.871ZM26.482,6.019a3.611,3.611,0,0,0-3.611-3.611H6.019A3.611,3.611,0,0,0,2.407,6.019V22.871a3.611,3.611,0,0,0,3.611,3.611H22.871a3.611,3.611,0,0,0,3.611-3.611ZM9.63,14.445a3.6,3.6,0,0,1,.905-2.392c.35-.394.691-.767.935-1.011l3.4-3.458a1.2,1.2,0,0,1,1.717,1.685l-3.405,3.467c-.225.226-.531.563-.843.914a1.2,1.2,0,0,0,0,1.593c.311.349.616.686.834.905l3.414,3.474a1.2,1.2,0,0,1-1.717,1.685l-3.405-3.464c-.241-.241-.578-.61-.926-1a3.6,3.6,0,0,1-.909-2.394Z"
                          fill="#808285"/>
                </svg>
            </a>
        </header>
    @else

    @endif
</div>
