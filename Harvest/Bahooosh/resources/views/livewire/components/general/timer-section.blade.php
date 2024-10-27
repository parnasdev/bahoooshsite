<div>
    @if(!$is_edit)
        <div class="p-time py-[2rem] max-[700px]:flex-col flex justify-between w-full" x-data="{
               countDownDate: @js(\Morilog\Jalali\Jalalian::fromFormat('Y/m/d h:s:i' ,$block->data['count_down_date'])->toCarbon()->getTimestampMs()),
               timer: { days: 0, hours: 0, minutes: 0, seconds: 0 },
            startTimer() {
              let x = setInterval(() => {

                    let now = new Date().getTime();
                    let distance = this.countDownDate - now;

                    if (distance < 0) {
                        this.timer = { days: 0, hours: 0, minutes: 0, seconds: 0 };
                        clearInterval(x)
                        return;
                    }

                    this.timer.days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    this.timer.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    this.timer.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    this.timer.seconds = Math.floor((distance % (1000 * 60)) / 1000);
                }, 1000);
            },
            init() {
                this.startTimer();
            },
            formattingNumber(number) {
                return number > 9 ? number : '0' + number
            }
        }">
            <img class="w-[100%] scale-95 min-[701px]:hidden" src="/img/view/png/clock.png" alt="">
            <div class="start mt-2 w-[45%] max-[700px]:w-full flex flex-col items-center">
                <h3 class="extraBold text-[20px]">{{ $block->data['title'] }}</h3>
                <span class="text-white bolX text-[14px] mt-2">{{ $block->data['subtitle'] }}</span>
                <div class="time mt-[2rem] flex items-center justify-center gap-2">
                    <div class="item items-center flex flex-col gap-2">
                        <div
                            class="square w-[50px] h-[50px] text-[18px] extraBold rounded-[8px] flex justify-center bg-white items-center" x-text="formattingNumber(timer.seconds)">
                            00
                        </div>
                        <h4 class="text-white extraBold">ثانیه</h4>
                    </div>
                    <span class="extraBold text-[20px] mb-[1.8rem]">:</span>
                    <div class="item items-center flex flex-col gap-2">
                        <div
                            class="square w-[50px] h-[50px] text-[18px] extraBold rounded-[8px] flex justify-center bg-white items-center " x-text="formattingNumber(timer.minutes)">
                            00
                        </div>
                        <h4 class="text-white extraBold">دقیقه</h4>
                    </div>
                    <span class="extraBold text-[20px] mb-[1.8rem]">:</span>
                    <div class="item items-center flex flex-col gap-2">
                        <div
                            class="square w-[50px] h-[50px] text-[18px] extraBold rounded-[8px] flex justify-center bg-white items-center " x-text="formattingNumber(timer.hours)">
                            00
                        </div>
                        <h4 class="text-white extraBold">ساعت</h4>
                    </div>
                    <span class="extraBold text-[20px] mb-[1.8rem]">:</span>
                    <div class="item items-center flex flex-col gap-2">
                        <div
                            class="square w-[50px] h-[50px] text-[18px] extraBold rounded-[8px] flex justify-center bg-white items-center "  x-text="formattingNumber(timer.days)">
                            00
                        </div>
                        <h4 class="text-white extraBold">روز</h4>
                    </div>

                </div>
            </div>
            <div class="end relative bottom-[8rem] max-[700px]:w-full max-[700px]:bottom-0 w-[45%] flex flex-col justify-center items-center">
                <img class="w-[330px] max-[700px]:hidden" src="{{ asset($block->data['image_url']) }}" alt="">
                <x-buttons.home.button href="{{ $block->data['btn_link'] }}"
                    class="bg-black text-white hover:bg-white hover:text-black border-2 border-black max-[600px]:w-48 mt-[2.5rem] w-64 gap-5">
                    {{ $block->data['btn_text'] }}
                </x-buttons.home.button>
            </div>
        </div>
    @else
        <x-bahooosh::general.timer-edit-form :$blockForm />
    @endif
</div>
