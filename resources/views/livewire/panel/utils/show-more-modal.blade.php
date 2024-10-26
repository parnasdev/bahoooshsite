<div>
    <div class="d-flex flex-wrap flex-100">
        @foreach($item as $i)
            <div class="d-flex flex-93 flex-direction-column border border-solid-1 px-12 py-10 radius-15 my-10">
                <span class="f-13 mb-15">{{ $i['input_label'] }}:</span>
                <span class="f-14 pr-15" style="line-break: auto">{{ empty( $data[$i['input_name']]) ? '---' :  $data[$i['input_name']] }}</span>
            </div>
        @endforeach

    </div>
</div>
