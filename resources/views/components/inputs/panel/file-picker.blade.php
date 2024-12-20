@props(['files' => [] ,
 'direction' => '/' ,
  'uploaderComponent' => 'panel.utils' ,
   'editComponent' => 'panel.utils' ,
    'thumbInput' => true ,
     'galleryInput' => false ,
     'fileInput' => false
     ])
<div class="" x-data="{
                        files: @entangle($attributes->wire('model')).live,
                        init() {

                        },
                        filemangerCallback(e) {
                            let { urls, file_type } = e.detail
                            if (file_type === 1 || file_type === '1') {
                                let index = this.files.findIndex(x => x.type === 1 || x.type === '1');
                                if (index !== -1) {
                                    this.files[index].url = urls[0]
                                    return;
                                }
                            }

                            urls.forEach(url => this.files.push({
                                id: null,
                                path: url,
                                type: file_type,
                                alt: ''
                            }));

                        }
                    }" @prs-file-manager.window="filemangerCallback">
    @if($thumbInput)
        <ul class="list-unstyled list-inline bg-white box-design p-7 mb-12">
            <li class="f-14 f-bold">
                <div class="d-flex justify-content-start m-left-auto pos-relative pt-5 pr-10 pb-5">
                    <label for="useData" class="d-flex f-14 text-63">
                        عکس شاخص (مربع)
                        <div class="rx-title title-input pb-10">
                            <div class="p-rx">
                                <div class="rx-border-rectangle-after label-input"></div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div x-show="files.filter(x => x.type === 1).length === 0"
                         class="flex-direction-column w-100 align-items-start flex-wrap justify-content-start ml-6">
                        <button type="button"
                                wire:click="$dispatch('openModal' , {component: '{{$uploaderComponent}}' + '.uploader-modal', arguments:{ maxItems: 1, type: 1, file_type: 'image', direction: '{{$direction}}' } })"
                                class="btn border-dotted-2 border-secondary text-white w-100 d-flex align-items-center justify-content-center p-10 radius-5 mb-4"
                                style="height: 212px;">
                            <svg width="40" height="40" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333"
                                      stroke-width="2" stroke-linecap="round"/>
                                <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333"
                                      stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                    @foreach (collect($files)->where('type', 1) as $key => $_file)
                        @php
                            $path = str_replace(env('APP_URL'), '', $_file['path']);
                            $fs = '';
                            if (\Illuminate\Support\Facades\Storage::disk('public')->exists($path)) {
                                $fs = \Illuminate\Support\Facades\Storage::disk('public')->mimeType($path);
                            }
                        @endphp
                        <div
                            class="flex-98 d-flex flex-wrap align-items-start justify-content-start ml-3">
                            <div
                                class="flex-100 d-flex flex-wrap align-items-center justify-content-around bg-light text-white py-5 radius-5 mb-4 pos-relative">
                                @switch($fs)
                                    @case(\Illuminate\Support\Str::startsWith($fs, 'image'))
                                        <img src="{{ asset( $_file['path']) }}" class="object-fit-cover mx-5"
                                             width="80" alt="{{ $_file['alt'] }}"
                                             style="width:100%;height: 200px">
                                        @break

                                    @default
                                        <svg class="object-fit-cover" width="100" height="100"
                                             viewBox="0 0 14 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M14 4.5V14C14 14.5304 13.7893 15.0391 13.4142 15.4142C13.0391 15.7893 12.5304 16 12 16H11V15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V4.5H11C10.6022 4.5 10.2206 4.34196 9.93934 4.06066C9.65804 3.77936 9.5 3.39782 9.5 3V1H4C3.73478 1 3.48043 1.10536 3.29289 1.29289C3.10536 1.48043 3 1.73478 3 2V11H2V2C2 1.46957 2.21071 0.960859 2.58579 0.585786C2.96086 0.210714 3.46957 0 4 0L9.5 0L14 4.5ZM1.6 11.85H0V15.849H0.791V14.507H1.594C1.881 14.507 2.125 14.45 2.326 14.334C2.529 14.217 2.684 14.059 2.789 13.86C2.89799 13.6512 2.95331 13.4185 2.95 13.183C2.95 12.933 2.897 12.707 2.792 12.506C2.68756 12.3062 2.52789 12.1406 2.332 12.029C2.132 11.909 1.889 11.85 1.6 11.85V11.85ZM2.145 13.183C2.1486 13.3148 2.1194 13.4453 2.06 13.563C2.00671 13.6654 1.92377 13.7494 1.822 13.804C1.70559 13.8616 1.57683 13.8897 1.447 13.886H0.788V12.48H1.448C1.666 12.48 1.837 12.54 1.96 12.661C2.083 12.783 2.145 12.957 2.145 13.183ZM3.362 11.85V15.849H4.822C5.223 15.849 5.556 15.769 5.82 15.612C6.08716 15.4522 6.29577 15.2106 6.415 14.923C6.545 14.623 6.611 14.261 6.611 13.839C6.611 13.419 6.546 13.061 6.415 12.764C6.29718 12.4797 6.09056 12.2412 5.826 12.084C5.562 11.928 5.227 11.85 4.821 11.85H3.362V11.85ZM4.153 12.495H4.716C4.964 12.495 5.166 12.545 5.325 12.647C5.49004 12.7549 5.61456 12.9146 5.679 13.101C5.758 13.302 5.797 13.553 5.797 13.854C5.8001 14.0534 5.77724 14.2525 5.729 14.446C5.69337 14.5986 5.62665 14.7423 5.533 14.868C5.44599 14.9801 5.33072 15.0671 5.199 15.12C5.04466 15.1777 4.88075 15.2056 4.716 15.202H4.153V12.495V12.495ZM7.896 14.258V15.849H7.106V11.85H9.654V12.503H7.896V13.62H9.502V14.258H7.896V14.258Z"
                                                  fill="#999"/>
                                        </svg>
                                @endswitch
                                <div class="flex-100 d-flex mr-3 pos-absolute left-7"
                                     style="top: -5px">
                                    <button type="button"
                                            wire:click="deleteFile({{ $key }})"
                                            wire:loading.attr="disabled" wire:target="deleteFile"
                                            class="d-flex align-items-center justify-content-center bg-white radius-5 px-9 py-7 ml-3 box-shadow-pattern-1">
                                        <svg width="20" height="20" viewBox="0 0 31 31"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.7852 19.2988L12.7852 15.4647"
                                                  stroke="#ff383f" stroke-width="2"
                                                  stroke-linecap="round"/>
                                            <path d="M17.8828 19.2988L17.8828 15.4647"
                                                  stroke="#ff383f" stroke-width="2"
                                                  stroke-linecap="round"/>
                                            <path
                                                d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                                stroke="#ff383f" stroke-width="2"
                                                stroke-linecap="round"/>
                                            <path
                                                d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                                stroke="#ff383f" stroke-width="2"
                                                stroke-linecap="round"/>

                                        </svg>
                                    </button>
                                    <button type="button"
                                            wire:click="$dispatch('openModal' , {component: '{{$editComponent}}'  + '.edit-popup', arguments : {file: @js($_file) } })"
                                            wire:loading.attr="disabled"
                                            wire:target="deleteFile , editFile"
                                            class="d-flex align-items-center justify-content-center bg-white radius-5 px-9 py-7 mr-3 box-shadow-pattern-1">
                                        <svg width="20" height="20" viewBox="0 0 47 47"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0013 28.2652L12.0013 28.2652C11.9882 28.2783 11.9748 28.2917 11.961 28.3054C11.8092 28.4567 11.6171 28.6481 11.4806 28.8897C11.3441 29.1313 11.2793 29.3946 11.2281 29.6027C11.2234 29.6216 11.2189 29.64 11.2144 29.658L12.181 29.899L11.2144 29.658L9.6376 35.9809C9.63481 35.9921 9.63189 36.0037 9.62888 36.0158C9.59215 36.1623 9.54126 36.3652 9.5238 36.5448C9.5037 36.7515 9.49728 37.2035 9.86628 37.5721C10.2353 37.9406 10.6872 37.9337 10.8939 37.9133C11.0735 37.8956 11.2764 37.8445 11.4228 37.8076C11.4348 37.8046 11.4465 37.8017 11.4577 37.7989L11.2174 36.8403L11.4577 37.7989L17.7605 36.2192L17.7606 36.2192C17.7614 36.219 17.7622 36.2188 17.763 36.2186C17.7802 36.2143 17.7978 36.2099 17.8159 36.2055C18.0244 36.1539 18.2884 36.0886 18.5303 35.9513L18.0368 35.0815L18.5303 35.9513C18.7723 35.814 18.9637 35.6209 19.115 35.4684C19.1287 35.4545 19.1421 35.441 19.1552 35.4279L34.5653 19.9793L34.6037 19.9408C34.9025 19.6414 35.193 19.3503 35.4004 19.0779C35.6342 18.7707 35.8538 18.3733 35.8538 17.8606C35.8538 17.3479 35.6342 16.9505 35.4004 16.6434C35.193 16.371 34.9025 16.0799 34.6037 15.7804L34.5653 15.7419L31.6533 12.8227L31.6148 12.7841C31.3147 12.4831 31.0231 12.1906 30.7501 11.9819C30.4425 11.7466 30.044 11.5254 29.5293 11.5254C29.0147 11.5254 28.6162 11.7466 28.3085 11.9819C28.0356 12.1906 27.7439 12.4831 27.4438 12.7841C27.431 12.7969 27.4182 12.8098 27.4053 12.8227L12.0124 28.254L12.0124 28.254L12.0013 28.2652Z"
                                                stroke="#4a0373" stroke-width="2"/>
                                            <path
                                                d="M24.7461 14.9865L30.483 11.1523L36.2199 16.9036L32.3953 22.6548L24.7461 14.9865Z"
                                                fill="#4a0373"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </li>
        </ul>
    @endif
    @if($galleryInput)
        <ul class="list-unstyled list-inline bg-white box-design p-7 mb-12">
            <li class="f-14 f-bold mb-8">
                <div class="d-flex justify-content-start m-left-auto pos-relative pt-5 pr-10 pb-5">
                    <label for="useData" class="d-flex f-14 text-63">
                        گالری
                        <div class="rx-title title-input pb-10">
                            <div class="p-rx">
                                <div class="rx-border-rectangle-after label-input"></div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div
                        class="flex-direction-column align-items-start flex-wrap justify-content-start ml-6">
                        <button type="button"
                                wire:click="$dispatch('openModal' , {component: '{{$uploaderComponent}}' + '.uploader-modal' , arguments: {maxItems: 10,type: 2,file_type: 'image',direction: '{{$direction}}' } })"
                                class="btn border-dotted-2 border-secondary text-white w-100 d-flex align-items-center justify-content-around p-10 radius-5 mb-4">
                            <svg width="20" height="20" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333"
                                      stroke-width="2" stroke-linecap="round"/>
                                <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333"
                                      stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                    @foreach (collect($files)->where('type', 2) as $key => $_file)
                        @php
                            $path = str_replace(env('APP_URL'), '',  $_file['path']);
                            $fs = '';
                            if (\Illuminate\Support\Facades\Storage::disk('public')->exists($path)) {
                                $fs = \Illuminate\Support\Facades\Storage::disk('public')->mimeType($path);
                            }
                        @endphp

                        <div
                            class="flex-48 flex-direction-column align-items-start flex-wrap justify-content-start ml-3">
                            <div
                                class="w-100 d-flex align-items-center justify-content-around bg-light text-white py-5 radius-5 mb-4">
                                @switch($fs)
                                    @case(\Illuminate\Support\Str::startsWith($fs, 'image'))
                                        <img src="{{ asset( $_file['path']) }}" width="80"
                                             alt="{{ $_file['alt'] }}">
                                        @break

                                    @default
                                        <svg class="object-fit-cover" width="100" height="100"
                                             viewBox="0 0 14 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M14 4.5V14C14 14.5304 13.7893 15.0391 13.4142 15.4142C13.0391 15.7893 12.5304 16 12 16H11V15H12C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14V4.5H11C10.6022 4.5 10.2206 4.34196 9.93934 4.06066C9.65804 3.77936 9.5 3.39782 9.5 3V1H4C3.73478 1 3.48043 1.10536 3.29289 1.29289C3.10536 1.48043 3 1.73478 3 2V11H2V2C2 1.46957 2.21071 0.960859 2.58579 0.585786C2.96086 0.210714 3.46957 0 4 0L9.5 0L14 4.5ZM1.6 11.85H0V15.849H0.791V14.507H1.594C1.881 14.507 2.125 14.45 2.326 14.334C2.529 14.217 2.684 14.059 2.789 13.86C2.89799 13.6512 2.95331 13.4185 2.95 13.183C2.95 12.933 2.897 12.707 2.792 12.506C2.68756 12.3062 2.52789 12.1406 2.332 12.029C2.132 11.909 1.889 11.85 1.6 11.85V11.85ZM2.145 13.183C2.1486 13.3148 2.1194 13.4453 2.06 13.563C2.00671 13.6654 1.92377 13.7494 1.822 13.804C1.70559 13.8616 1.57683 13.8897 1.447 13.886H0.788V12.48H1.448C1.666 12.48 1.837 12.54 1.96 12.661C2.083 12.783 2.145 12.957 2.145 13.183ZM3.362 11.85V15.849H4.822C5.223 15.849 5.556 15.769 5.82 15.612C6.08716 15.4522 6.29577 15.2106 6.415 14.923C6.545 14.623 6.611 14.261 6.611 13.839C6.611 13.419 6.546 13.061 6.415 12.764C6.29718 12.4797 6.09056 12.2412 5.826 12.084C5.562 11.928 5.227 11.85 4.821 11.85H3.362V11.85ZM4.153 12.495H4.716C4.964 12.495 5.166 12.545 5.325 12.647C5.49004 12.7549 5.61456 12.9146 5.679 13.101C5.758 13.302 5.797 13.553 5.797 13.854C5.8001 14.0534 5.77724 14.2525 5.729 14.446C5.69337 14.5986 5.62665 14.7423 5.533 14.868C5.44599 14.9801 5.33072 15.0671 5.199 15.12C5.04466 15.1777 4.88075 15.2056 4.716 15.202H4.153V12.495V12.495ZM7.896 14.258V15.849H7.106V11.85H9.654V12.503H7.896V13.62H9.502V14.258H7.896V14.258Z"
                                                  fill="#999"/>
                                        </svg>
                                @endswitch
                                <div class="flex-50 d-flex mr-3">
                                    <button type="button"
                                            wire:click="deleteFile({{ $key }})"
                                            wire:loading.attr="disabled" wire:target="deleteFile"
                                            class="flex-48 d-flex align-items-center justify-content-center bg-white radius-5 py-3 ml-3">
                                        <svg width="20" height="20" viewBox="0 0 31 31"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.7852 19.2988L12.7852 15.4647"
                                                  stroke="#ff383f" stroke-width="2"
                                                  stroke-linecap="round"/>
                                            <path d="M17.8828 19.2988L17.8828 15.4647"
                                                  stroke="#ff383f" stroke-width="2"
                                                  stroke-linecap="round"/>
                                            <path
                                                d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                                stroke="#ff383f" stroke-width="2"
                                                stroke-linecap="round"/>
                                            <path
                                                d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                                stroke="#ff383f" stroke-width="2"
                                                stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            wire:click="$dispatch('openModal' , {component: '{{$editComponent}}'  + '.edit-popup', arguments : {file: @js($_file) } })"
                                            wire:loading.attr="disabled"
                                            wire:target="deleteFile , editFile"
                                            class="flex-48 d-flex align-items-center justify-content-center bg-white radius-5 py-3 mr-3">
                                        <svg width="20" height="20" viewBox="0 0 47 47"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0013 28.2652L12.0013 28.2652C11.9882 28.2783 11.9748 28.2917 11.961 28.3054C11.8092 28.4567 11.6171 28.6481 11.4806 28.8897C11.3441 29.1313 11.2793 29.3946 11.2281 29.6027C11.2234 29.6216 11.2189 29.64 11.2144 29.658L12.181 29.899L11.2144 29.658L9.6376 35.9809C9.63481 35.9921 9.63189 36.0037 9.62888 36.0158C9.59215 36.1623 9.54126 36.3652 9.5238 36.5448C9.5037 36.7515 9.49728 37.2035 9.86628 37.5721C10.2353 37.9406 10.6872 37.9337 10.8939 37.9133C11.0735 37.8956 11.2764 37.8445 11.4228 37.8076C11.4348 37.8046 11.4465 37.8017 11.4577 37.7989L11.2174 36.8403L11.4577 37.7989L17.7605 36.2192L17.7606 36.2192C17.7614 36.219 17.7622 36.2188 17.763 36.2186C17.7802 36.2143 17.7978 36.2099 17.8159 36.2055C18.0244 36.1539 18.2884 36.0886 18.5303 35.9513L18.0368 35.0815L18.5303 35.9513C18.7723 35.814 18.9637 35.6209 19.115 35.4684C19.1287 35.4545 19.1421 35.441 19.1552 35.4279L34.5653 19.9793L34.6037 19.9408C34.9025 19.6414 35.193 19.3503 35.4004 19.0779C35.6342 18.7707 35.8538 18.3733 35.8538 17.8606C35.8538 17.3479 35.6342 16.9505 35.4004 16.6434C35.193 16.371 34.9025 16.0799 34.6037 15.7804L34.5653 15.7419L31.6533 12.8227L31.6148 12.7841C31.3147 12.4831 31.0231 12.1906 30.7501 11.9819C30.4425 11.7466 30.044 11.5254 29.5293 11.5254C29.0147 11.5254 28.6162 11.7466 28.3085 11.9819C28.0356 12.1906 27.7439 12.4831 27.4438 12.7841C27.431 12.7969 27.4182 12.8098 27.4053 12.8227L12.0124 28.254L12.0124 28.254L12.0013 28.2652Z"
                                                stroke="#4a0373" stroke-width="2"/>
                                            <path
                                                d="M24.7461 14.9865L30.483 11.1523L36.2199 16.9036L32.3953 22.6548L24.7461 14.9865Z"
                                                fill="#4a0373"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </li>
        </ul>
    @endif
    @if($fileInput)
        <ul class="list-unstyled list-inline bg-white box-design p-7 mb-12">
            <li class="f-14 f-bold mb-8">
                <div class="d-flex justify-content-start m-left-auto pos-relative pt-5 pr-10 pb-5">
                    <label for="useData" class="d-flex f-14 text-63">
                        فایل ها
                        <div class="rx-title title-input pb-10">
                            <div class="p-rx">
                                <div class="rx-border-rectangle-after label-input"></div>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="d-flex flex-wrap align-items-center">
                    <div
                        class="flex-direction-column align-items-start flex-wrap justify-content-start ml-6">
                        <button type="button"
                                wire:click="$dispatch('openModal' , {component: '{{$uploaderComponent}}', arguments: {maxItems: 10,type: 3,file_type: 'image',direction: '{{$direction}}' } })"
                                class="btn border-dotted-2 border-secondary text-white w-100 d-flex align-items-center justify-content-around p-10 radius-5 mb-4">
                            <svg width="20" height="20" viewBox="0 0 32 32" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.9375 8.02344L15.9375 23.3601" stroke="#333"
                                      stroke-width="2" stroke-linecap="round"/>
                                <path d="M23.5898 15.6914L8.29139 15.6914" stroke="#333"
                                      stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                    </div>
                    @foreach (collect($files)->where('type', 3) as $key => $_file)

                        <div
                            class="flex-48 flex-direction-column align-items-start flex-wrap justify-content-start ml-3">
                            <div
                                class="w-100 d-flex align-items-center justify-content-around bg-light text-white py-5 radius-5 mb-4">
                                @php($array = explode('.' , \Illuminate\Support\Facades\File::basename( $_file['path'])))
                                <span
                                    class="f-14 text-dark">{{ \Illuminate\Support\Str::limit($array[0] , 20) . '.' . end($array) }}</span>
                                <div class="flex-50 d-flex mr-3">
                                    <button type="button"
                                            wire:click="deleteFile({{ $key }})"
                                            wire:loading.attr="disabled" wire:target="deleteFile"
                                            class="flex-48 d-flex align-items-center justify-content-center bg-white radius-5 py-3 ml-3">
                                        <svg width="20" height="20" viewBox="0 0 31 31"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.7852 19.2988L12.7852 15.4647"
                                                  stroke="#ff383f" stroke-width="2"
                                                  stroke-linecap="round"/>
                                            <path d="M17.8828 19.2988L17.8828 15.4647"
                                                  stroke="#ff383f" stroke-width="2"
                                                  stroke-linecap="round"/>
                                            <path
                                                d="M3.85938 9.07617H26.8071V9.07617C25.0914 9.07617 24.2336 9.07617 23.6689 9.56799C23.5996 9.62832 23.5346 9.69336 23.4743 9.76264C22.9824 10.3273 22.9824 11.1851 22.9824 12.9008V21.6909C22.9824 23.5765 22.9824 24.5193 22.3967 25.1051C21.8109 25.6909 20.8681 25.6909 18.9824 25.6909H11.684C9.79837 25.6909 8.85556 25.6909 8.26977 25.1051C7.68399 24.5193 7.68399 23.5765 7.68399 21.6909V12.9008C7.68399 11.1851 7.68399 10.3273 7.19217 9.76264C7.13184 9.69336 7.0668 9.62832 6.99752 9.56799C6.43283 9.07617 5.57501 9.07617 3.85938 9.07617V9.07617Z"
                                                stroke="#ff383f" stroke-width="2"
                                                stroke-linecap="round"/>
                                            <path
                                                d="M12.8702 4.43653C13.0155 4.30065 13.3356 4.18058 13.7809 4.09494C14.2262 4.00931 14.7718 3.96289 15.3331 3.96289C15.8944 3.96289 16.44 4.00931 16.8853 4.09494C17.3306 4.18058 17.6507 4.30065 17.7959 4.43653"
                                                stroke="#ff383f" stroke-width="2"
                                                stroke-linecap="round"/>
                                        </svg>
                                    </button>
                                    <button type="button"
                                            wire:click="$dispatch('openModal' , {component: '{{$editComponent}}'  + '.edit-popup', arguments : {file: @js($_file) } })"
                                            wire:loading.attr="disabled"
                                            wire:target="deleteFile , editFile"
                                            class="flex-48 d-flex align-items-center justify-content-center bg-white radius-5 py-3 mr-3">
                                        <svg width="20" height="20" viewBox="0 0 47 47"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.0013 28.2652L12.0013 28.2652C11.9882 28.2783 11.9748 28.2917 11.961 28.3054C11.8092 28.4567 11.6171 28.6481 11.4806 28.8897C11.3441 29.1313 11.2793 29.3946 11.2281 29.6027C11.2234 29.6216 11.2189 29.64 11.2144 29.658L12.181 29.899L11.2144 29.658L9.6376 35.9809C9.63481 35.9921 9.63189 36.0037 9.62888 36.0158C9.59215 36.1623 9.54126 36.3652 9.5238 36.5448C9.5037 36.7515 9.49728 37.2035 9.86628 37.5721C10.2353 37.9406 10.6872 37.9337 10.8939 37.9133C11.0735 37.8956 11.2764 37.8445 11.4228 37.8076C11.4348 37.8046 11.4465 37.8017 11.4577 37.7989L11.2174 36.8403L11.4577 37.7989L17.7605 36.2192L17.7606 36.2192C17.7614 36.219 17.7622 36.2188 17.763 36.2186C17.7802 36.2143 17.7978 36.2099 17.8159 36.2055C18.0244 36.1539 18.2884 36.0886 18.5303 35.9513L18.0368 35.0815L18.5303 35.9513C18.7723 35.814 18.9637 35.6209 19.115 35.4684C19.1287 35.4545 19.1421 35.441 19.1552 35.4279L34.5653 19.9793L34.6037 19.9408C34.9025 19.6414 35.193 19.3503 35.4004 19.0779C35.6342 18.7707 35.8538 18.3733 35.8538 17.8606C35.8538 17.3479 35.6342 16.9505 35.4004 16.6434C35.193 16.371 34.9025 16.0799 34.6037 15.7804L34.5653 15.7419L31.6533 12.8227L31.6148 12.7841C31.3147 12.4831 31.0231 12.1906 30.7501 11.9819C30.4425 11.7466 30.044 11.5254 29.5293 11.5254C29.0147 11.5254 28.6162 11.7466 28.3085 11.9819C28.0356 12.1906 27.7439 12.4831 27.4438 12.7841C27.431 12.7969 27.4182 12.8098 27.4053 12.8227L12.0124 28.254L12.0124 28.254L12.0013 28.2652Z"
                                                stroke="#4a0373" stroke-width="2"/>
                                            <path
                                                d="M24.7461 14.9865L30.483 11.1523L36.2199 16.9036L32.3953 22.6548L24.7461 14.9865Z"
                                                fill="#4a0373"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </li>
        </ul>
    @endif
</div>
