<?php

namespace App\Http\Controllers;

use App\Helper\CustomController;
use App\Models\Team;

/**
 * Class TeamController
 * @package App\Http\Controllers
 */
class TeamController extends CustomController
{
    /**
     * @return Team[]|\Illuminate\Database\Eloquent\Collection|string
     */
    public function index(){
        if (request()->isMethod('POST')){
            return $this->postData();
        }

        return Team::all();
    }

    /**
     * @return string
     */
    public function postData(){
        $data = Team::find(request('id'));

        if (request('action') == 'delete') {
            $this->delete(request('id'));
        }
        $oldImg          = null;
        $imageName       = $this->generateImageName('image');
        $destinationPath = public_path().'/assets/images/team';
        $field = request()->all();
        if (request()->has('image')){
            $field['image'] = '/assets/images/team/'.$imageName;
        }

        if ($data){
            $oldImg = $data->image;

            $data->update($field);
        }else{
            Team::create($field);
        }

        if (request()->has('image')) {
            $file = request()->file('image');
            $this->saveImage($imageName, $file, $destinationPath, $oldImg);
        }

        return 'success';
    }


    public function delete($id)
    {
        $data = Team::find($id);
        $this->deleteImg('Team', $id, $data->image);
        return 'success';
    }
}
