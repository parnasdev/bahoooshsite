<?php

namespace App\Livewire\Panel\Section;

use App\Services\Sidebar;
use Livewire\Component;

class SidebarPanel extends Component
{
    public function render()
    {
        $sidebars = (new Sidebar())->addTitle('منو اصلی')
            ->addLink('داشبورد', '', route('panel.index'), 'panel.index')
            ->addLink('نوشته ها', '', route('panel.posts.index'), 'panel.posts.*', 'posts.read')
            ->addLink('صفحه ها', '', route('panel.pages.index'), 'panel.pages.*', 'pages.read')
            ->addLink('منو سایت', '', route('panel.links.index'), 'panel.links.*', 'links.read')
            ->addLink('سئو', '', route('panel.settings.seo'), 'panel.settings.seo', 'settings.read')
            ->addLink('فایل ها', '', route('panel.fileManger'), 'panel.fileManger', 'files')
            ->addLink('فرم ها', '', route('panel.forms.index'), 'panel.forms.*', 'forms.read')
            ->addLink('کاربر ها', '', route('panel.users.index'), 'panel.users.*', 'users.read')
            ->addTitle('تنظیمات')
            ->addLink('تنظیمات اصلی', '', route('panel.settings.index'), 'panel.settings.index', 'settings.read')
            ->toArray();
        return view('livewire.panel.section.sidebar-panel', compact('sidebars'));
    }
}
