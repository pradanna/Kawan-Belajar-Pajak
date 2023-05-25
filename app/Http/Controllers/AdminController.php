<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{

    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }

        return view('/admin/administrator/administrator');

    }

    public function postData()
    {
        $field = request()->validate(
            [
                'name'     => 'required',
                'username' => 'required',
            ],
            [
                'name.required'      => 'Nama admin harus di isi',
                'username.required'  => 'Username admin harus di isi',
                'password.required'  => 'Password harus di isi',
            ]
        );
        if (request('id') == null){
            request()->validate(
                [
                    'password' => 'required|confirmed|min:8',
                ],
                [
                    'password.confirmed' => 'Password konfirmasi tidak sesuai',
                    'password.min'       => 'Password harus lebih dari 8 karakter',
                ]
            );
        }

        if (request('password')){
            request()->validate(
                [
                    'password' => 'required|confirmed|min:8',
                ],
                [
                    'password.confirmed' => 'Password konfirmasi tidak sesuai',
                    'password.min'       => 'Password harus lebih dari 8 karakter',
                ]
            );
            $field['password'] = Hash::make(request('password'));
        }

        $data  = User::find(request('id'));

        if ($data) {
            $data->update($field);
            $text = 'Berhasil edit data';

        } else {
            User::create($field);
            $text = 'Berhasil simpan data';

        }

        return [
            'status_text' => $text,
        ];

    }

    public function delete($id)
    {
        User::destroy($id);

        return 'success';
    }

    public function datatable()
    {
        $data = DB::table('users');

        return DataTables::of($data)
                         ->addColumn(
                             'action',
                             function ($data) {
                                 $id     = $data->id;
                                 $name     = $data->name;
                                 $username     = $data->username;

                                 $string = 'data-id='.$id;
                                 $string .= " data-name='$name'";
                                 $string .= " data-username='$username'";

                                 return "<div class='flex items-center gap-2'><a type=\"button\" ".$string."
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">Edit</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a></div>";
                             }
                         )->rawColumns(['action'])->make(true);
    }

}
