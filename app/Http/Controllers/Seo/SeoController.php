<?php

namespace App\Http\Controllers\Seo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function robots()
    {
        return response()->view('seo.robots')
            ->header('Content-Type', 'text/text');
    }
}
