 <div class="c-btn ml-7 pb-5 m-pb-0">
     <button
         class="ancher btn-effect {{ $trash ? 'bg-info' : 'bg-danger' }} text-white radius-5"
        @click="$dispatch('showTrash')">
         @if ($trash)
             <div class="circle-solid top-right bg-white"></div>
             بازگشت
         @else
             <svg class="ml-5" width="23" height="23"
                  viewBox="0 0 31 31" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                 <path d="M12.7852 19.2988L12.7852 15.4647" stroke="#fff"
                       stroke-width="2" stroke-linecap="round"></path>
                 <path d="M17.8828 19.2988L17.8828 15.4647" stroke="#fff"
                       stroke-width="2" stroke-linecap="round"></path>
                 <path
                     d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                     stroke="#fff" stroke-width="2" stroke-linecap="round">
                 </path>
                 <path
                     d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                     stroke="#fff" stroke-width="2" stroke-linecap="round">
                 </path>
             </svg>
             <div class="circle-solid top-right bg-white"></div>
             زباله‌دان
         @endif
     </button>
 </div>
