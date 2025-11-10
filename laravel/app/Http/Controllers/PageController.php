<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class PageController extends Controller
{
    public function showAbout($name = null): View
    {
        
        $gosterilecekIsim = $name ?? 'Ziyaretçi';
        return view('about', [
            'isim' => $gosterilecekIsim
        ]);
    }
}
