<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\About;
use App\Models\Education;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class EducationController extends CustomController
{

    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }

        return view('/admin/pendidikan/pendidikan');
    }

    public function postData()
    {
        if (request('type') == 4 || request('type') == 5) {
            $form = request()->validate(
                [
                    'type'        => 'required',
                    'description' => 'required',
                ],
                [
                    'type.required'        => 'Tipe les harus di isi',
                    'description.required' => 'Deskripsi harus di isi',
                ]
            );
        } else {
            $form = request()->validate(
                [
                    'type'        => 'required',
                    'name'        => 'required',
                    'description' => 'required',
                    'schedule'    => 'required',
                    'price'       => 'required',
                ],
                [
                    'type.required'        => 'Tipe les harus di isi',
                    'name.required'        => 'Nama les harus di isi',
                    'description.required' => 'Deskripsi harus di isi',
                    'schedule.required'    => 'Jadwal harus di isi',
                    'price.required'       => 'Harga harus di isi',
                ]
            );
        }

        $data = Education::find(request('id'));
        $imageName       = $this->generateImageName('image');
        $destinationPath = public_path().'/assets/images/education';

        if (request()->has('image')) {
            $form['image'] = '/assets/images/education/'.$imageName;
        }
        $oldImg = null;
        if ($data) {
            $oldImg = $data->image;
            $data->update($form);
            $data['status_text'] = 'Berhasil edit data';
        } else {
            $data = Education::create($form);
            $data['status_text'] = 'Berhasil simpan data';

        }

        if (request()->has('image')) {
            $file = request()->file('image');
            $this->saveImage($imageName, $file, $destinationPath, $oldImg);
        }

        return $data;
    }

    public function delete($id)
    {
        $data = Education::find($id);
        $this->deleteImg('Education', $id, $data->image);
        $type = $data->type;
        Education::destroy($id);

        return [
            'type' => $type
        ];
    }

    public function datatable()
    {
        $data = DB::table('education')->where('type','=',request('q'));

        return DataTables::of($data)
                         ->addColumn(
                             'action',
                             function ($data) {
                                 $id = $data->id;
                                 $name = $data->name;
                                 $description = $data->description;
                                 $type = $data->type;
                                 $image = $data->image;
                                 $schedule = $data->schedule;
                                 $price = $data->price;

                                 $string = 'data-id='.$id;
                                 $string .= " data-description='$description'";
                                 $string .= " data-type='$type'";
                                 $string .= " data-image='$image'";
                                 if ($data->type <= 3){
                                    $string .= " data-name='$name'";
                                    $string .= " data-schedule='$schedule'";
                                    $string .= " data-price='$price'";
                                 }
                                 return "<a type=\"button\" ".$string."
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">Edit</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a>";
                             }
                         )->rawColumns(['action'])->make(true);
    }

    public function education_page()
    {
        $about = About::firstOrFail();
        $educations_offline = Education::where('type', '=', 0)->get();
        $educations_online = Education::where('type', '=', 1)->get();
        $tax_online = Education::where('type', '=', 2)->get();
        $tax_offline = Education::where('type', '=', 3)->get();
        $facilities = Education::where('type', '=', 4)->get();
        $benefits = Education::where('type', '=', 5)->get();
        return view('Pendidikan')->with([
            'about' => $about,
            'educations_offline' => $educations_offline,
            'educations_online' => $educations_online,
            'tax_online' => $tax_online,
            'tax_offline' => $tax_offline,
            'facilities' => $facilities,
            'benefits' => $benefits,
        ]);
    }
}
