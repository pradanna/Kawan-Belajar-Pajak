<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Helper\CustomController;
use App\Models\Student;
use App\Models\Dashboard;

class DashboardController extends CustomController
{
    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }
        $data = Dashboard::first();

        return view('/admin/beranda/beranda', ['data' => $data]);
    }

    public function postData()
    {
        $data = Dashboard::first();

        $oldImg          = null;
        $oldImgP         = null;
        $imageName       = $this->generateImageName('image');
        $imageNamePop    = $this->generateImageName('popup');
        $destinationPath = public_path().'/assets/images/dashboard';
        $field           = request()->all();
        $field['author'] = request('author') ?? "anonymous";
        if (request()->has('image')) {
            $field['image'] = '/assets/images/dashboard/'.$imageName;
        }
        if (request()->has('popup')) {
            $field['popup'] = '/assets/images/dashboard/'.$imageNamePop;
        }
        if ($data) {
            $oldImg  = $data->image;
            $oldImgP = $data->popup;

            $data->update($field);
        } else {
            Dashboard::create($field);
        }

        if (request()->has('image')) {
            $file = request()->file('image');
            $this->saveImage($imageName, $file, $destinationPath, $oldImg);
        }

        if (request()->has('popup')) {
            $file = request()->file('popup');
            $this->saveImage($imageNamePop, $file, $destinationPath, $oldImgP);
        }

        return redirect()->back()->with('success', "berhasil update data...");
    }

    public function welcome_page()
    {
        $hero      = Dashboard::firstOrFail();
        $about     = About::firstOrFail();
        $testimony = Student::all();

        return view('welcome')->with(
            [
                'hero'      => $hero,
                'testimony' => $testimony,
                'about'     => $about,
            ]
        );
    }
}
