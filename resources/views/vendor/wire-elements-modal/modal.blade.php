<div>
    <x-utils.compile-template-styles scss="
    .box-modal{
    height: 100vh;
    width: 100%;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #00000099;
    z-index: 999;
    position: fixed;
    right: 0;
    top: 0;
    .p-box-close {
        display:flex;
        justify-content: flex-end;
        margin-bottom:.6rem;
        button {
            border:none;
            background:#d11a2a;
            width: 32px;
            height: 32px;
            padding: 4px;
            border-radius: 50%;
        }
    }
    .p-box-modal{
        background: #fff;
        border-radius: 10px;
        padding: 1rem;
        height: auto;
        max-height: 750px;
        overflow-y: auto;
        width: 50%;
    }
}
@media only screen and (max-width: 500px){
    .box-modal .p-box-modal{
        width: 80% !important;
    }
}
"/>

@isset($jsPath)
    <script>
        {!! file_get_contents($jsPath) !!}
    </script>
@endisset
@isset($cssPath)
    <style>
        {!! file_get_contents($cssPath) !!}
    </style>
@endisset

<div style="display: none" x-data="LivewireUIModal()"
     x-on:close.stop="setShowPropertyTo(false)"
     x-on:keydown.escape.window="closeModalOnEscape()"
     x-show="show">
    <div x-transition.opacity class="box-modal" x-show="show && showActiveComponent">
        <div class="p-box-modal" x-on:click.outside="closeModalOnClickAway()" x-bind:class="modalWidth">
            <div class="p-box-close">
                <button wire:click="$dispatch('closeModal')">
                    <svg width="25" height="25" viewBox="0 0 32 32" fill="none"
                         xmlns="http://www.w3.org/2000/svg"
                        >
                        <path d="M23.5875 8.36914L8.28906 23.7058" stroke="#fff" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.29139 8.36914L23.5898 23.7058" stroke="#fff" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            @forelse($components as $id => $component)
                <div x-show.immediate="activeComponent == '{{ $id }}'" x-ref="{{ $id }}" wire:key="{{ $id }}">
                    @livewire($component['name'], $component['arguments'], key($id))
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>

</div>
