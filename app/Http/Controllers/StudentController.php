<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Student;

/**
 * Class StudentController
 * @package App\Http\Controllers
 */
class StudentController extends CustomController
{
    /**
     * @return Student[]|\Illuminate\Database\Eloquent\Collection|string
     */
    public function index()
    {
        if (request()->isMethod('POST')) {
            return $this->postData();
        }

        return Student::all();
    }

    /**
     * @return string
     */
    public function postData()
    {
        $data = Student::find(request('id'));
        if (request('action') == 'delete') {
            $this->delete(request('id'));
        }
        $oldImg          = null;
        $imageName       = $this->generateImageName('image');
        $destinationPath = public_path().'/assets/images/student';
        $field           = request()->all();
        if (request()->has('image')) {
            $field['image'] = '/assets/images/student/'.$imageName;
        }

        if ($data) {
            $oldImg = $data->image;
            $data->update($field);
        } else {
            Student::create($field);
        }

        if (request()->has('image')) {
            $file = request()->file('image');
            $this->saveImage($imageName, $file, $destinationPath, $oldImg);
        }

        return 'success';
    }

    public function delete($id)
    {
        $data = Student::find($id);
        $this->deleteImg('Student', $id, $data->image);

        return 'success';
    }

}
