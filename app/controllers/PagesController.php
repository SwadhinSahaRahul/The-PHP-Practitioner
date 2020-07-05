<?php

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $company = "TrinaryLab";
        return view('about', [
            'company' => $company
        ]);
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

    public function contact()
    {
        return view('contact');
    }
}
