<?php

namespace App\Livewire\Panel\Setting;

use App\Models\Setting;
use Livewire\Attributes\{On, Layout};
use Livewire\{WithPagination, Component};
use Illuminate\Support\Facades\Route;

#[Layout('components.layouts.panel')]
class SeoPage extends Component
{
    use WithPagination;

    public $paginationTheme = 'panel-paginate';

    public $setting;
    public $selectBoxAction = null;
    public $isAdvancedSettingEnabled;
    public $advancedSetting;
    public $livePreview;
    public $perPage;

    public function mount(): void
    {
        $setting = ['siteTitle', 'separator' , 'keywords', 'siteTitle_before', 'robots'];
        foreach ($setting as $item) {
            if ($item == 'robots')
                $this->setting[$item] = getValue($item) ?? [];
            else
                $this->setting[$item] = getValue($item) ?? '';
        }

        $this->isAdvancedSettingEnabled = $this->setting['robots']['isAdvancedSettingEnabled'] ?? false;
        $this->advancedSetting = $this->setting['robots']['advancedSetting'] ?? null;
    }

    #[On('update-list')]
    public function render()
    {
        if ($this->selectBoxAction <> null) {
            $this->selectBoxAction($this->selectBoxAction);
        }

        $this->livePreview();
        $allRobots = $this->fillRobotsList();
//        $allRedirects = Redirection::paginate($this->perPage);

        return view('livewire.panel.setting.seo-page', compact('allRobots'));
    }

    public function livePreview(): void
    {
        $this->livePreview = "User-agent: *\nDisallow: /panel\n\n" . $this->advancedSetting . "\n\nSitemap: " . (Route::has('sitemap.indexs') ? route('sitemap.index') : '');
    }

    public function removeRobot($robot): void
    {
        if (array_key_exists($robot, $this->setting['robots']['selectedRobots'])) {
            unset($this->setting['robots']['selectedRobots'][$robot]);
        }

        $this->selectBoxAction = null;
    }

    public function selectBoxAction($robot): void
    {
        if ($robot <> '0') {
            if (!array_key_exists('selectedRobots', $this->setting['robots'] ?? [])) {
                $this->setting['robots']['selectedRobots'] = [];
            }

            if (!in_array($robot, $this->setting['robots']['selectedRobots'])) {
                $this->setting['robots']['selectedRobots'][$robot] = str_replace('-', ' ', $robot);
            }
        }
    }

    public function fillRobotsList(): array
    {
        return [
            '*' => 'همه ربات ها',
            'Google' => 'Google',
            'Google-Image' => 'Google Image',
            'Google-Mobile' => 'Google Mobile',
            'MSN-Search' => 'MSN Search',
            'Yahoo' => 'Yahoo',
            'DMOZ-Checker' => 'DMOZ Checker',
            'Alexa/Wayback' => 'Alexa/Wayback',
            'Baidu' => 'Baidu',
            'SemrushBot' => 'SemrushBot',
            'Yandex' => 'Yandex',
            'bingbot' => 'bingbot',
        ];
    }

    public function submit(): void
    {
        $this->setting['robots']['isAdvancedSettingEnabled'] = $this->isAdvancedSettingEnabled;
        $this->setting['robots']['advancedSetting'] = $this->advancedSetting;

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

//    public function deleteRedirectRoute($id): void
//    {
//        Redirection::query()->find($id)->delete();
//
//        $this->dispatch('toast-message', message: 'تغییر مسیر با موفقیت حذف شد.', icon: 'success');
//    }
}
