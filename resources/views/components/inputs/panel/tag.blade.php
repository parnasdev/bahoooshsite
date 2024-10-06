@props(['model' => '', 'type' => 'post'])
<div x-data="{
    tag: '',
    selected: @entangle($attributes->wire('model')),
    tags: [],
    show: false,
    init() {
        if (this.selected == undefined || this.selected == null) {

        }
        this.getMyTags();
    },
    getMyTags() {
       $wire.getTags(this.tag, @js($type)).then(result => {
            this.tags = JSON.parse(result);
       });
    },
    addTag() {
        $wire.addTags(this.tag, @js($type)).then(result => {
            this.selected.push(JSON.parse(result));
        });
        this.tag = '';
    },
    selectTag(t) {
        this.tag = t;
        this.addTag();
    },
    remove(index) {
        this.selected.splice(index, 1);
    }
}">

    <div class="c-input mb-2" style="position: relative">
        <div class="d-flex justify-content-start m-left-auto pos-relative pt-5 pr-10 pb-5">
            <label for="useData" class="d-flex f-14 text-63">
                برچسب ها
                <div class="rx-title title-input pb-10">
                    <div class="p-rx">
                        <div class="rx-border-rectangle-after label-input"></div>
                    </div>
                </div>
            </label>
        </div>
        <div class="d-flex flex-row flex-wrap scroller mb-2" style="max-height: 75px">
            <template x-for="(item , index) in selected">
                <div class="d-flex pos-relative tag-label ml-5">
                <span class="text-white bg-secondary radius-5 f-14 px-4 px-10 mb-5 cursor-pointer" x-text="item.name"
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
        <input placeholder="لطفا برچسب خود را بنویسید و Enter را بزنید." class="form-control"
            id="tags" name="tags" x-model="tag" @keyup="getMyTags" @click.outside="show = false"
            @click="show = true" @keydown.enter.prevent="addTag" />
        <ul class="flex-wrap mr-19 mt-10 scroller" style="width:98%; max-height: 150px" :class="show ? 'd-flex' : 'd-none'">
            <template x-for="item in tags.filter(x => selected?.filter(y => y.name == x.name).length == 0)">
                <li class="list-group-item ml-7 mb-7 f-14 text-align-center" @click="selectTag(item.name)"
                    x-text="item.name">
                    <svg width="20" height="20" viewBox="0 0 47 47" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M40.4293 23.0799C40.4293 32.6089 32.7238 40.3337 23.2186 40.3337C13.7133 40.3337 6.00781 32.6089 6.00781 23.0799C6.00781 13.5509 13.7133 5.82617 23.2186 5.82617C32.7238 5.82617 40.4293 13.5509 40.4293 23.0799ZM23.2185 24.4957L16.2753 31.4562L14.8629 30.0403L21.8061 23.0797L14.8633 16.1196L16.2757 14.7036L23.2185 21.6638L30.1613 14.7036L31.5738 16.1196L24.631 23.0797L31.5742 30.0403L30.1617 31.4562L23.2185 24.4957Z"
                            fill="#CCD2E3" />
                    </svg>
                </li>
            </template>
        </ul>
    </div>
</div>
