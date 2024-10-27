<div class="aboutPage">
    <form class="form py-5 flex flex-wrap justify-center w-full gap-3" wire:submit="submit">
        @guest
            <div class=" w-full grid grid-cols-1 md:grid-cols-2 gap-2">
                <x-inputs.home.floating-text label="نام خود را وارد کنید*" wire:model="form.name" />
                <x-inputs.home.floating-text inputmode="email" label="ایمیل خود را وارد کنید" wire:model="form.email" />
            </div>
        @endguest
        <x-inputs.home.select label="امتیاز خود را وارد کنید*" wire:model="form.rate">
            <x-inputs.home.select.option value="1" text="۱ ستاره" image="/img/view/svg/star.svg" />
            <x-inputs.home.select.option value="2" text="۲ ستاره" image="/img/view/svg/star.svg"/>
            <x-inputs.home.select.option value="3" text="۳ ستار" image="/img/view/svg/star.svg"/>
            <x-inputs.home.select.option value="4" text="۴ ستاره" image="/img/view/svg/star.svg"/>
            <x-inputs.home.select.option value="5" text="۵ ستاره" image="/img/view/svg/star.svg"/>
        </x-inputs.home.select>
        <x-inputs.home.textarea label="متن کامنت" wire:model="form.body" />
        <x-buttons.home.button class="bg-black text-white hover:bg-white hover:text-black border-2 border-black mt-1 w-48 gap-5">
            ثبت نظر
        </x-buttons.home.button>
    </form>
</div>
