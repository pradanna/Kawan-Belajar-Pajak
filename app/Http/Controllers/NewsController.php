<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\About;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class NewsController extends CustomController
{

    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }

        return view('/admin/berita/berita');

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
        $data = News::find(request('id'));

        $oldImg          = null;
        $imageName       = $this->generateImageName('image');
        $destinationPath = public_path().'/assets/images/news';
        $field = request()->all();
        $field['author'] = request('author') ?? "anonymous";
        if (request()->has('image')) {
            $field['image'] = '/assets/images/news/'.$imageName;
        }

        if ($data) {
            $oldImg = $data->image;
            $data->update($field);
            $text = 'Berhasil edit data';

        } else {
            News::create($field);
            $text = 'Berhasil simpan data';

        }

        if (request()->has('image')) {
            $file = request()->file('image');
            $this->saveImage($imageName, $file, $destinationPath, $oldImg);
        }

        return [
            'status_text' => $text
        ];

    }

    public function delete($id)
    {
        $data = News::find($id);
        $this->deleteImg('News', $id, $data->image);

        return 'success';
    }


    public function datatable()
    {
        $data = DB::table('news');

        return DataTables::of($data)
                        ->addColumn('content', function ($data){
                            return $data->content;
                        })
                         ->addColumn(
                             'action',
                             function ($data) {
                                 $id = $data->id;
                                 $title = $data->title;
                                 $date = $data->date;
                                 $author = $data->author;
                                 $image = $data->image;

                                 $string = "data-id='$id'";
                                 $string .= " data-title='$title'";
                                 $string .= " data-date='$date'";
                                 $string .= " data-author='$author'";
                                 $string .= " data-image='$image'";

                                 return "<a type=\"button\" ".$string."
                                       class=\"editData font-bold cursor-pointer p-2 bg-blue-600 rounded-md text-white transition-all duration-300  hover:bg-blue-400\">Edit</a>
                                    <a href=\"#\" data-id='".$id."'
                                       class=\"deleteData font-bold p-2 bg-red-600 rounded-md text-white transition-all duration-300  hover:bg-red-400\">Hapus</a>";
                             }
                         )->rawColumns(['action','content'])->make(true);
    }

    public function news_page()
    {
        $about = About::firstOrFail();
        $news = News::orderBy('created_at', 'DESC')->get();
        return view('berita')->with(['about' => $about, 'news' => $news]);
    }
}
