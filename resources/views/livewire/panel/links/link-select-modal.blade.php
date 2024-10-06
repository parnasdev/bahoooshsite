<div>
    <form x-data="{
        linkType: @entangle('type'),
        item: @entangle('itemId')
    }" wire:submit="submit">

        <div class="box-design bg-white box-design p-7 mb-12">
            <!--? select -->
            <x-inputs.panel.select label="نوع لینک" wire:model.live="type" :options="['category' => 'دسته بندی' , 'page' => 'صفحه ها' , 'emptyLink' => 'دیگر امکانات']">
            </x-inputs.panel.select>
        </div>

        <div x-show="linkType === 'category'" class="box-design bg-white box-design p-7 mb-12">
            <!--? select -->
            <x-inputs.panel.select-ajax label="دسته‌بندی" wire:model="itemId"
                                        :route="route('select_category' , ['type' => 'category'])"/>
        </div>
        <div x-show="linkType === 'page'" class="box-design bg-white box-design p-7 mb-12">
            <x-inputs.panel.select-ajax label="برگه" wire:model="itemId"
                                        :route="route('select_post' , ['post_type' => 'page'])"/>
        </div>
        <div x-show="linkType === 'emptyLink'" class="box-design bg-white box-design p-7 mb-12">
            <!--? select -->
            <x-inputs.panel.select label="دیگر امکانات" wire:model="itemId" :options="['1' => 'لینک خالی']">
            </x-inputs.panel.select>
        </div>
        <div class="c-btn mt-3">
            <button class="btn bg-primary text-white radius-5">
                افزودن
            </button>
        </div>
    </form>
</div>
