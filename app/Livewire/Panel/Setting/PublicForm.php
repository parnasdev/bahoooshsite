<?php

namespace App\Livewire\Panel\Setting;

use App\Models\Block;
use App\Models\Setting;
use Livewire\Attributes\Title;
use Livewire\Component;

class PublicForm extends Component
{
    public array $setting = [];

    public string $domain = "";

    public $settingTab = 'logo';

    public $palettes;

    public $palletIndex;

    public $backColor;
    public Block $headerBlock;
    public Block $footerBlock;

    protected $queryString = ['settingTab'];

    public function mount()
    {
        $setting = ['siteLogos', 'favicon', 'favicon', 'footer' , 'header', 'profile_image_default','post_thumbnail_default' , 'logo_size', 'header_banner' , 'banner_info'];
        foreach ($setting as $item) {
            if ($item == 'logo_size') {
                $this->setting[$item] = empty(getValue($item)) ? ['width' => '' , 'height' => ''] : getValue($item);
            } elseif($item == 'header_banner') {
                $this->setting[$item] = empty(getValue($item)) ? ['path' => '' , 'alt' => '' , 'link' => ''] : getValue($item);
            } elseif ($item == 'banner_info') {
                $this->setting[$item] = empty(getValue($item)) ? ['path' => '' , 'alt' => '' , 'link' => ''] : getValue($item);
            } else {
                $this->setting[$item] = getValue($item);
            }
        }

        $this->headerBlock =  Block::query()->find(config('cms.header_id'));
        $this->footerBlock =  Block::query()->find(config('cms.footer_id'));
    }

    public function render()
    {
        return view('livewire.panel.setting.public-form');
    }

    public function submit()
    {
        $this->publicSetting();
    }

    public function publicSetting()
    {
        foreach ($this->setting as $key => $item) {
            $setting = Setting::query()->where('name', $key)->first();
            if (!empty($setting)) {
                $setting->update([
                    'value' => $item
                ]);
            } else {
                Setting::query()->create([
                    'name' => $key,
                    'value' => $item
                ]);
            }
        }

        $this->dispatch('toast-message', message: 'تنظیمات اعمال شد.', icon: 'success');
    }

    public function deleteBanner()
    {
        $setting = Setting::query()->where('name', 'banner_info')->first();

        if (!empty($setting)) {
            $setting->delete();
            $this->setting['banner_info'] = empty(getValue('banner_info')) ? ['path' => '' , 'alt' => '' , 'link' => ''] : getValue('banner_info');
        }

        $this->dispatch('toast-message', message: 'بنر حذف شد.', icon: 'success');
    }
}
