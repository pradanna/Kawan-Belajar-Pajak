<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }

        return view('/admin/blog/blog');

    }

    public function postData()
    {
        request()->validate(
            [
                'title'   => 'required',
                'content' => 'required',
                'date'    => 'required',
            ],
            [
                'title.required'   => 'Judul berita harus di isi',
                'content.required' => 'Isi berita harus di isi',
                'date.required'    => 'Tanggal berita harus di isi',
            ]
        );
        $data = Blog::find(request('id'));
        $field = request()->all();
        $field['author'] = request('author') ?? "anonymous";

        if ($data) {
            $data->update($field);
            $text = 'Berhasil edit data';

        } else {
            Blog::create($field);
            $text = 'Berhasil simpan data';

        }
        return [
            'status_text' => $text
        ];

    }

    public function delete($id)
    {
        Blog::destroy($id);
        return 'success';
    }


    public function datatable()
    {
        $data = DB::table('blogs');

        return DataTables::of($data)
                         ->addColumn('content', function ($data){
                             return $data->content;
                         })
                         ->addColumn(
                             'action',
                             function ($data) {
                                 $id = $data->id;
                                 $string = 'data-id='.$id;
                                 $string .= ' data-title='.$data->title;
                                 $string .= ' data-date='.$data->date;
                                 $string .= ' data-author='.$data->author;

                                 return "<a type=\"button\" ".$string."
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">Edit</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a>";
                             }
                         )->rawColumns(['action','content'])->make(true);
    }

}
