<?php

namespace Harvest\Bahooosh\Traits;

use App\Enums\BlockCategory;
use App\Enums\PageType;
use App\Models\Block;
use App\Models\Page;
use Artesaos\SEOTools\Facades\SEOTools;

trait LoadPage
{
    public Page $page;
    private bool $justLoadLayout = false;

    public Block|null $headerBlock = null;
    public Block|null $footerBlock = null;

    public $blocks;

    public function mountLoadPage(): void
    {

        if (!$this->getJustLoadLayout()) {
            $this->blocks = collect();
            $this->page = Page::findBySlugOrFail($this->pageRoute());

            SEOTools::setTitle($this->page->title)
                ->setDescription($this->page->description)
                ->jsonLd()->setType('WebPage');
            ;


            $this->blocks = $this->page->blocks()->whereNull('parent_id')->get();
            if ($this->page->options['page_type'] == PageType::TEXT_MODE->value) {
                $staticBlock = $this->blocks->where('category', BlockCategory::STATIC)->first();
                if (empty($staticBlock)) {
                    $staticBlock = $this->page->blocks()->create([
                        'component_name' => 'bahooosh::components.static.text-section',
                        'title' => 'متن',
                        'is_livewire' => 1,
                        'show_desktop' => 1,
                        'show_tablet' => 1,
                        'show_mobile' => 1,
                        'data' => [
                            'text' => $this->page->body,
                        ],
                        'category' => 'static',
                        'padding' => [],
                        'margin' => [],
                        'order_item' => 1
                    ]);

                    $this->blocks->push($staticBlock);
                } else {
                    $staticBlock->data = array_merge($staticBlock->data, ['text' => $this->page->body]);
                    $staticBlock->save();
                }
            }


            $this->headerBlock = ($this->page->options['show_header'] ?? true) ? Block::query()->find(config('cms.header_id')) : null;
            $this->footerBlock = ($this->page->options['show_footer'] ?? true) ? Block::query()->find(config('cms.footer_id')) : null;

            if (!empty($this->headerBlock)) {
                $this->blocks->push($this->headerBlock);
            }

            if (!empty($this->footerBlock)) {
                $this->blocks->push($this->footerBlock);
            }
        } else {
            $this->headerBlock = Block::query()->find(config('cms.header_id'));
            $this->footerBlock = Block::query()->find(config('cms.footer_id'));
        }


    }

    public function pageRoute(): string
    {
        return '';
    }

    public function getJustLoadLayout(): bool
    {
        return $this->justLoadLayout;
    }
}
