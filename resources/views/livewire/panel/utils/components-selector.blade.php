<div x-data="{
    tabBox:'media_slider',
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
        <button :class="{'btn-active':tabBox==='media_slider'}" @click="tabBox='media_slider'">اسلایدر رسانه</button>
        <button :class="{'btn-active':tabBox==='support'}" @click="tabBox='support'">خدمات سایت</button>
        <button :class="{'btn-active':tabBox==='offer_slider'}" @click="tabBox='offer_slider'">اسلایدر محصولات ویژه
        </button>
        <button :class="{'btn-active':tabBox==='banner'}" @click="tabBox='banner'">بنر تبلیغاتی</button>
        <button :class="{'btn-active':tabBox==='product_slider'}" @click="tabBox='product_slider'">اسلایدر محصولات
        </button>
        <button :class="{'btn-active':tabBox==='blog'}" @click="tabBox='blog'">لیست نوشته‌ها (وبلاگ)</button>
        <button :class="{'btn-active':tabBox==='category'}" @click="tabBox='category'">دسته‌بندی</button>
        <button :class="{'btn-active':tabBox==='faq'}" @click="tabBox='faq'"> سوالات متداول</button>
        <button :class="{'btn-active':tabBox==='customer_comment'}" @click="tabBox='customer_comment'">نظرات مشتریان
        </button>
        <button :class="{'btn-active':tabBox==='newsletter'}" @click="tabBox='newsletter'">خبرنامه</button>
        <button :class="{'btn-active':tabBox==='brand'}" @click="tabBox='brand'">برند ها</button>
        <button :class="{'btn-active':tabBox==='general'}" @click="tabBox='general'">عمومی</button>
    </div>

    <div class="body-box">
        <div class="list-sections scroller">
            <template x-for="component in search(components , tabBox)">
                <div @click="$wire.addComponent(component)" style="width: 100% ; height: 100%;">
                    <span x-text="component.title"></span>
                </div>
            </template>

        </div>
    </div>

</div>
