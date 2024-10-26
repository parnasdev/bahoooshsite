<div x-data="{
    tabBox:'field',
    components: @entangle('components').live,
    q: @entangle('q').live,
    search(components , keyword){
        let searched = components.filter((component) => {
            if (component.category.match(keyword)){
                return component;
            }
        })
        return searched;
    },
    makeNewContent(components , content , item , itemIndex) {
        let newContent = [];
        content.forEach((element , contentIndex) => {
            if(element.componentName != item.componentName){
                newContent.push(element);
            }
            else if (itemIndex != contentIndex){
                newContent.push(element);
            }
        })

        return newContent;
    },
    }">

    <div class="p-tab-box">
        <button :class="{'btn-active':tabBox==='field'}" @click="tabBox='field'">فیلد ها</button>
        <button :class="{'btn-active':tabBox==='general'}" @click="tabBox='general'">عمومی</button>
    </div>

    <div class="body-box">
        <div class="list-sections scroller">
            <template x-for="component in search(components , tabBox)">
                <div @click="$wire.addComponent(component)" style="width: 100px; height: 100px; display: flex; justify-content: center; align-items: center; background: #f2f2f2; border-radius: 15px">
                    <span class="f-14" x-text="component.title"></span>
                </div>
            </template>

        </div>
    </div>

</div>
