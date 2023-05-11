<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Student;

class DashboardController extends Controller
{
    public function index(){
        if (request()->isMethod('POST')){
            return $this->postData();
        }
        $data = Dashboard::first();

        return view('/admin/beranda/beranda', ['data' => $data]);
    }

    public function postData(){
        $dashboard = Dashboard::first();
        if ($dashboard){
            $dashboard->update(request()->all());
        }else{
            Dashboard::create(request()->all());
        }

        return redirect()->back()->with('success', "berhasil update data...");

    }

    public function welcome_page()
    {
        $hero = Dashboard::firstOrFail();
        $testimony = Student::all();
        return view('welcome')->with([
            'hero' => $hero,
            'testimony' => $testimony
        ]);
    }
}
