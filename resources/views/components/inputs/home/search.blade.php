<div {{ $attributes->whereDoesntStartWith('wire')->whereDoesntStartWith('placeholder')->merge(['class' => 'box-search bg-white']) }}>
    <input class="text-gray-s text-normal" type="text" {{ $attributes->whereStartsWith('placeholder') }} {{ $attributes->wire('model') }}>
    <button type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="16.908" height="16.908"
             viewBox="0 0 16.908 16.908">
            <path id="fi-rr-search"
                  d="M16.67,15.675l-4.2-4.2a7.047,7.047,0,1,0-.995.995l4.2,4.2a.7.7,0,1,0,.995-.995Zm-9.644-3.02a5.629,5.629,0,1,1,5.629-5.629,5.629,5.629,0,0,1-5.629,5.629Z"
                  transform="translate(0.032 0.032)" fill="#4b4b4b"/>
        </svg>

    </button>
</div>
