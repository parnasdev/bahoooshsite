<div class="w-10 m-flex-30 justify-content-start ml-7 pb-5">
    <div class="select c-s h-2percent-6rem">
        <select class="radius-7" {{ $attributes->wire('model') }}>
            <option value="0">-</option>
            <option value="1">حذف</option>
            @if ($trash)
                <option value="2">بازگردانی</option>
            @endif
        </select>
    </div>
</div>
