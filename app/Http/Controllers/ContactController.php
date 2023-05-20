<?php


namespace App\Http\Controllers;


use App\Helper\CustomController;
use App\Models\About;

class ContactController extends CustomController
{

    public function contact_Page()
    {
        $about = About::firstOrFail();
        return view('kontak')->with([
            'about' => $about
        ]);
    }
}
