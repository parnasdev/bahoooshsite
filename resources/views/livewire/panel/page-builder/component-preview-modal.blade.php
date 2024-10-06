<div>
    {{-- <iframe class="w-100 border-0" style="height:80vh" src="/?preview=true">

    </iframe> --}}
    {{-- {{ $component['name'] }} --}}
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}


    <div>
        <div class="d-flex flex-wrap justify-content-center flex-100 mb-20">
            <div class="radius-5 px-20 py-5 d-flex align-items-center justify-content-center flex-25 m-flex-80 h-2rem " style="background-color: #212e47;">
                <p class="f-15 text-white f-boldd">نمای پیشفرض کامپوننت</p>
            </div>
        </div>

        <iframe class="responsive-iframe " style="height: 600px; width: 100%" src="{{ route("panel.pagepreview", ['data' => $data , 'component' => $component]) }}" >

        </iframe>
    </div>
</div>
