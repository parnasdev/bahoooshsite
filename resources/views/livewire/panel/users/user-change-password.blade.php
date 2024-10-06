<div>
{{--        <x-slot name="title">--}}
{{--            <h5 class="modal-title">تغییر رمز عبور</h5>--}}
{{--        </x-slot>--}}
        <form wire:submit="submit">
            <div class="c-input mb-2">
                <div class="d-flex justify-content-start m-left-auto pos-relative pr-5">
                    <label for="password" class="d-flex f-14 text-63">
                        رمز عبور
                        <div class="rx-title title-input pb-10">
                            <div class="p-rx">
                                <div class="rx-border-rectangle-after label-input"></div>
                            </div>
                        </div>
                    </label>
                </div>
                <x-parnas.inputs.text class="form-control" wire:model="password" id="password" />
                @error('password')
                    <p class="text-danger f-14 m-left-auto alert-invalid">{{ $message }}</p>
                @enderror
            </div>
            <div class="c-btn justify-content-end my-10 mt-25">
                <x-parnas.buttons.button class="btn bg-success text-white radius-5">
                    ثبت
                </x-parnas.buttons.button>
            </div>
        </form>
</div>
