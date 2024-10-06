@props(['route' => '' , 'label' => null , 'options' => []])
<div {{ $attributes->whereDoesntStartWith('wire:model') }} x-data="{
    selected: @entangle($attributes->wire('model')),
    keyword: '',
    options: [],
    show: false,
    init() {
        this.options = @js($options);


    },
    selectOption(item) {
        if (item === '*') {
            this.selected = this.options;
        } else
            this.selected.push(item);
    },
    remove(index) {
    if (index === '*') {
        this.selected = [];
    }
    else
        this.selected.splice(index, 1);
    },
    search() {
        if (this.keyword === '')
        {
            return this.options.filter(x => this.selected?.filter(y => y.text == x.text).length == 0);
        }
        return this.options.filter(x => x.text.match(this.keyword) && this.selected?.filter(y => y.text == x.text).length == 0)
    }
}">

    <div class="c-input" @click.outside="show = false" style="position: relative">
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
        <div class="d-flex flex-row flex-wrap scroller mb-2" style="max-height: 75px" >
            <template x-for="(item , index) in selected ?? []" :key="index">
                <div class="d-flex pos-relative tag-label ml-5">
                <span class="text-white bg-secondary radius-5 f-14 px-4 px-10 mb-5 cursor-pointer" x-text="item.text"
                      @click="remove(index)">
                </span>
                    <svg width="14" height="14" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg"
                         @click="remove(index)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M40.4293 23.0799C40.4293 32.6089 32.7238 40.3337 23.2186 40.3337C13.7133 40.3337 6.00781 32.6089 6.00781 23.0799C6.00781 13.5509 13.7133 5.82617 23.2186 5.82617C32.7238 5.82617 40.4293 13.5509 40.4293 23.0799ZM23.2185 24.4957L16.2753 31.4562L14.8629 30.0403L21.8061 23.0797L14.8633 16.1196L16.2757 14.7036L23.2185 21.6638L30.1613 14.7036L31.5738 16.1196L24.631 23.0797L31.5742 30.0403L30.1617 31.4562L23.2185 24.4957Z"
                              fill="#CCD2E3" />
                    </svg>
                </div>
            </template>
        </div>
        <input x-model="keyword" @click="show = true" />
        <ul class="flex-wrap mr-19 mt-10 scroller" style="width:98%; max-height: 150px"
            :class="show ? 'd-flex' : 'd-none'" >
            <li class="list-group-item bg-success ml-7 mb-7 f-14 text-align-center" @click="selectOption('*')">
                انتخاب همه
            </li>
            <li class="list-group-item bg-danger ml-7 mb-7 f-14 text-align-center" @click="remove('*')">
                حذف همه انتخاب ها
            </li>
            <template x-for="(item , index) in search()" :key="index+'_searchList'">
                <li class="list-group-item ml-7 mb-7 f-14 text-align-center" @click="selectOption(item)"
                    x-text="item.text">
                </li>
            </template>
        </ul>
    </div>
</div>
