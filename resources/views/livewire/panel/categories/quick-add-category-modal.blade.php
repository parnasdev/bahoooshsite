<div>
    <div>
       <x-inputs.panel.text label="نام" wire:model="nCategory.name" />
        <!-- parent -->
        @if($cat_type != 'brand')
            <x-inputs.panel.select placeholder="اصلی"  id="parent_id"
                                   :options="$categories"
                                    wire:model="nCategory.parent_id">
            </x-inputs.panel.select>
        @endif

        <div class="c-btn justify-content-end pt-10">
            <button class="btn bg-success text-white radius-5" type="button" wire:click="submit">ثبت</button>
        </div>
    </div>
</div>
