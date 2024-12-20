@props(['route' => '' , 'label' => null , 'multiple' => false , 'oldSelected' => null])
<div x-data="{
    selected: {id: 0 , text: ''},
    value: @entangle($attributes->wire('model')),
    keyword: '',
    options: [],
    show: false,
    init() {
        if (@js($multiple)) {
            this.selected = []
        }

        if (@js(!empty($oldSelected))) {
            this.selected = @js($oldSelected)
        }
        $watch('keyword' , value => {
            if (value !== '')
                this.search();
        })
    },
    search() {
        this.show = false;
        axios.get(@js($route) + '?q=' + this.keyword).then(res => {
            this.options = res.data.items
            this.show = true;
        }).catch(err => {
        });

    },
    selectOption(item) {
        if (@js($multiple)) {
            this.selected.push(item);
            this.value.push(item.id)
        } else {
             this.selected = item;
            this.value = item.id
        }
    },
    deleteOption(index) {
        this.selected.splice(index , 1);
        this.value.splice(index , 1);
    }

}">

    <div class="c-input mb-2" style="position: relative">
        @if($label ?? false)
            <div class="d-flex justify-content-start m-left-auto pos-relative pt-5 pr-10 pb-5">
                <label for="useData" class="d-flex f-14 text-63">
                    {{ $label }}
                    <div class="rx-title title-input pb-10">
                        <div class="p-rx">
                            <div class="rx-border-rectangle-after label-input"></div>
                        </div>
                    </div>
                </label>
            </div>
        @endif
        @if($multiple)
            <div class="d-flex flex-row flex-wrap scroller mb-2" style="max-height: 75px">
                <template x-for="(item , index) in selected">
                    <div class="d-flex pos-relative tag-label ml-5" @click="deleteOption(index)">
                        <span class="text-white bg-secondary radius-5 f-14 px-4 px-10 mb-5 cursor-pointer"
                              x-text="item.text">
                        </span>
                    </div>
                </template>
            </div>
        @else
            <div class="d-flex flex-row flex-wrap scroller mb-2" style="max-height: 75px">
                <div class="d-flex pos-relative tag-label ml-5">
                <span class="text-white bg-secondary radius-5 f-14 px-4 px-10 mb-5 cursor-pointer"
                      x-text="selected.text">
                </span>
                </div>
            </div>
        @endif
        <input
            id="tags" name="tags" x-model.debounce.700ms="keyword"/>
        <ul class="flex-wrap mr-19 mt-10 scroller" style="width:98%; max-height: 150px"
            :class="show ? 'd-flex' : 'd-none'">
            <template x-for="item in options">
                <li class="list-group-item ml-7 mb-7 f-14 text-align-center" @click="selectOption(item)"
                    x-text="item.text">
                </li>
            </template>
        </ul>
    </div>
</div>
