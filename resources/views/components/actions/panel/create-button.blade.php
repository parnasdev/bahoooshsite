@empty($can)
    <div class="c-btn ml-5 pb-5 m-pb-0">
        <a href="{{ $route }}"
           class="ancher btn-effect bg-success text-white radius-5">
            <div class="circle-solid top-right bg-white"></div>
            <svg width="25" height="25" viewBox="0 0 32 32"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#fff"
                      stroke-width="2" stroke-linecap="round"/>
                <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#fff"
                      stroke-width="2" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
@else
    @can($can)
        <div class="c-btn ml-5 pb-5 m-pb-0">
            <a href="{{ $route }}"
               class="ancher btn-effect bg-success text-white radius-5">
                <div class="circle-solid top-right bg-white"></div>
                <svg width="25" height="25" viewBox="0 0 32 32"
                     fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#fff"
                          stroke-width="2" stroke-linecap="round"/>
                    <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#fff"
                          stroke-width="2" stroke-linecap="round"/>
                </svg>
            </a>
        </div>
    @endcan
@endempty
