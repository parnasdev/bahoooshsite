<?php

namespace Harvest\Bahooosh\Livewire\Components\Support;

use App\Livewire\ComponentBuilder;

class PlansSection extends ComponentBuilder
{

    public function mount()
    {
        $this->fillData();

        if (empty($this->blockForm->data)) {
            $this->blockForm->data = [
                'title' => '',
                'plans' => [],
                'link_text' => '',
                'link_url' => '',
            ];
        }
    }

    public function render()
    {
        return view('bahooosh::livewire.components.support.plans-section');
    }

    public function addItem()
    {
        if (count($this->blockForm->data['plans']) == 3) {
            return;
        }

        $this->blockForm->data['plans'][] = [
            'image_url' => '',
            'title' => '',
            'subtitle' => '',
            'is_special' => false,
            'price' => 0,
            'sell_price' => 0,
            'facilities' => [
                [
                    'title' => 'هاست ابری نامحدود رایگان',
                    'is_active' => true,
                ],
                [
                    'title' => 'حسابداری، انبارداری آنلاین',
                    'is_active' => true,
                ],
                [
                    'title' => 'دسترسی به تمامی ابزار های هوش مصنوعی',
                    'is_active' => true,
                ],
                [
                    'title' => 'اتصال به دامنه شخصی',
                    'is_active' => true,
                ],
                [
                    'title' => 'اتصال به کانال های فروش (ترب، ایمالز، ذره‌بین)',
                    'is_active' => true,
                ],
                [
                    'title' => '7 روز تست رایگان',
                    'is_active' => true,
                ],
                [
                    'title' => '7پشتیبانی رایگان (از ساعت ۹ صبح الی ۱۸ عصر)',
                    'is_active' => true,
                ],
                [
                    'title' => 'طراحی گرافیکی اولیه سایت و چیدمان فنی',
                    'is_active' => true,
                ],
                [
                    'title' => 'مشاوره دریافت اینماد و درگاه پرداخت مناسب',
                    'is_active' => true,
                ],
                [
                    'title' => 'بارگذاری محصولات اولیه سایت تا ۳۰ محصول',
                    'is_active' => true,
                ],
                [
                    'title' => 'پرداخت اشتراک بصورت اقساطی (۳ قسط)',
                    'is_active' => true,
                ],
                [
                    'title' => 'مشاوره رایگان سئو و افزایش فروش',
                    'is_active' => true,
                ],

            ],
            'btn_text' => '',
            'btn_link' => '',
        ];
    }

    public function deleteItem($index)
    {
        unset($this->blockForm->data['plans'][$index]);

        $this->blockForm->data['plans'] = array_values($this->blockForm->data['plans']);
    }
}
