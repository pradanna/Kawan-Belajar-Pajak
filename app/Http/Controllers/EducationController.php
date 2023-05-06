<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class EducationController extends Controller
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
        if ($data) {
            $data->update($form);
            $data['status_text'] = 'Berhasil edit data';
        } else {
            $data = Education::create($form);
            $data['status_text'] = 'Berhasil simpan data';

        }

        return $data;
    }

    public function delete($id)
    {
        $data = Education::find($id);
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
                                 $string = 'data-id='.$id;
                                 $string .= ' data-description='.$data->description;
                                 $string .= ' data-type='.$data->type;
                                 if ($data->type <= 3){
                                    $string .= ' data-name='.$data->name;
                                    $string .= ' data-schedule='.$data->schedule;
                                    $string .= ' data-price='.$data->price;
                                 }
                                 return "<a type=\"button\" ".$string."
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">Edit</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a>";
                             }
                         )->rawColumns(['action'])->make(true);
    }
}
