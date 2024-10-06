<?php

namespace App\Livewire\Panel\PageBuilder;

use App\Models\Post;
use Livewire\Component;

class ElementorEditor extends Component
{

    public Post $post;

    protected $listeners = ['sendComponent'];

    public $components = [
        array(
            'name' => 'tenant.components.main-section',
            'title' => 'اسلایدر عکس',
            'data' => [],
            'show' => true
        ),
        array(
            'name' => 'tenant.components.support-thumbnail',
            'title' => 'خدمات',
            'data' => [],
            'show' => true
        ),
        array(
            'name' => 'product::tenant.components.product-offer-slider',
            'title' => 'اسلاید محصول ویژه',
            'data' => [],
            'show' => true
        ),
        array(
            'name' => 'tenant.components.banner-section',
            'title' => 'بنر ها',
            'data' => [],
            'show' => true
        ),
        array(
            'name' => 'product::tenant.components.product-slider',
            'title' => 'اسلاید محصولات',
            'data' => [],
            'show' => true
        ),
        array(
            'name' => 'tenant.components.blogs.blog-list',
            'title' => 'لیست بلاگ',
            'data' => [],
            'show' => true
        )
    ];

    public function render()
    {
        return view('livewire.tenant.panel.page-builder.elementor-editor')
            ->layout('layouts.no-layout-panel');
    }

    public function sendComponent($e){
        dd($e);
    }
}
