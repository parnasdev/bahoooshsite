<?php

namespace App\Livewire\Panel;

use App\Models\Post;
use Harvest\Ecommerce\Enums\OrderStatus;
use Harvest\Ecommerce\Models\Order;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Morilog\Jalali\CalendarUtils;

#[Layout('components.layouts.panel')]
class IndexPanel extends Component
{

    public $visits = [];

    public $labelVisits = [];

    public $bgColor = [];
    public $borderColor = [];

    public function mount()
    {
        $year = jdate()->getYear();
        $months = [
            array('color' => '#ceabe8', 'text' => 'فروردین', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-01' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-01' . '-31')),
            array('color' => '#1a368f','text' => 'اردیبهشت', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-02' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-02' . '-31')),
            array('color' => '#d1896b','text' => 'خرداد', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-03' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-03' . '-31')),
            array('color' => '#167e41','text' => 'تیر', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-04' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-04' . '-31')),
            array('color' => '#aff072','text' => 'مرداد', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-05' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-05' . '-31')),
            array('color' => '#668a7b','text' => 'شهریور', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-06' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-06' . '-31')),
            array('color' => '#96ff78','text' => 'مهر', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-07' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-07' . '-30')),
            array('color' => '#92e492','text' => 'آبان', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-08' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-08' . '-30')),
            array('color' => '#3a38d2','text' => 'آذر', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-09' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-09' . '-30')),
            array( 'color' => '#25d7ea','text' => 'دی', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-10' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-10' . '-30')),
            array( 'color' => '#39c28','text' => 'بهمن', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-11' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-11' . '-30')),
            array( 'color' => '#e83434','text' => 'اسفند', 'start' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-12' . '-01'), 'end' => CalendarUtils::createCarbonFromFormat('Y-m-d', $year . '-12' . '-30')),
        ];

        foreach ($months as $month) {
            $data = Post::popularBetween($month['start'] , $month['end'])
                ->withTotalVisitCount()->get()->sum('visit_count_total');

            $this->visits[] =  $data;
        }

        $this->labelVisits = collect($months)->pluck('text')->toArray();
        $this->bgColor = collect($months)->pluck('color')->toArray();
        $this->borderColor = collect($months)->pluck('color')->toArray();
    }

    #[Title('داشبورد')]
    public function render()
    {

        return view('livewire.panel.index-panel' );
    }


}
