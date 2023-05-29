<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\About;
use App\Models\LearningEnvironment;
use App\Models\Student;
use App\Models\Team;

/**
 * Class AboutController
 * @package App\Http\Controllers
 */
class AboutController extends CustomController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }
        $data = About::first();

        return view('/admin/tentang/tentang', ['data' => $data]);
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postData()
    {
        $about = About::first();
        if ($about) {
            $about->update(request()->all());
        } else {
            About::create(request()->all());
        }

        return redirect()->back()->with('success', "berhasil update data...");
    }

    public function image()
    {
        if (request()->isMethod('POST')) {
            return $this->postImage();
        }

        $repo = LearningEnvironment::all();

        $data = [];
        foreach ($repo as $key => $d) {
            if ($d->image && file_exists(public_path() . $d->image)) {
                $d['size'] = filesize(public_path($d['image']));
            }
            $data[$key] = $d;
        }

        return $data;
    }

    public function postImage()
    {
        if (request('action') == 2) {
            $this->deleteImg('LearningEnvironment', request('id'), request('name'));
            $data = 'success';
        } else {

            $imageName       = $this->generateImageName('file');
            $file            = request()->file('file');
            $destinationPath = public_path() . '/assets/images/environment';
            $data            = LearningEnvironment::create(
                [
                    'image' => '/assets/images/environment/' . $imageName,
                ]
            );

            $this->saveImage($imageName, $file, $destinationPath);
        }

        return $data;
    }

    public function about_page()
    {
        $about = About::firstOrFail();
        $team = Team::all();
        $students = Student::all();
        $lingkungan = LearningEnvironment::all();
        return view('tentang')->with(['about' => $about, 'teams' => $team, 'students' => $students, 'lingkungan' => $lingkungan]);
    }
}
