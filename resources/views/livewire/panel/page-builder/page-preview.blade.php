<div>
    @livewire($component , ['data' => ($data ?? []) , 'edit' => false , 'selective' => true] , key(rand()))
</div>

@push('scripts')
    <script>
        window.addEventListener('DOMContentLoaded' , function () {
            let links = document.querySelectorAll('a')

            for(let i = 0 ; i < links.length; i++) {
                links[i].removeAttribute("href");
            }
            console.log(links);
        })
    </script>
@endpush
