<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class PageController extends Controller
{
    public function showAbout($name): View
    {
        // routes/web.php dosyasındaki mantığın aynısını buraya taşıyoruz
        return view('about', [
            'isim' => $name
        ]);
    }
}
