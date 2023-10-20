<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\StatusCode;
use App\Project;
use App\ProjectImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Session;

class ProjectController extends Controller
{
    public function project_list(Request $request)
    {
        if ($request->isMethod('post')) {

            $rules = [
                'project_name' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
            }
            $input = $request->except('_token');
            $project = new Project();
            $project->fill($input);
            if ($project->save()) {
                return $this->_response_body(true);
            }

        }
        $projects = Project::all();
        return view('admin.project.project_list', compact('projects'));

    }

    public function update(Request $request, $id)
    {
        $rules = [
            'project_name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
        }

        $input = $request->except('_token');
        $project = Project::find($id);
        $project->fill($input);
        if ($project->update()) {
            return $this->_response_body(true);
        }

    }

    public function delete($id)
    {
        $project = Project::find($id);
        if ($project->delete()) {
            Session::flash('message_danger', 'Project successfully deleted.');
            return redirect()->back();
        }
    }

    public function project_image(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = [
                'project_id' => 'required',
                'image_path' => 'required',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
            }

            foreach ($request->image_path as $file) {
                $name = time() . '_' . $file->getclientOriginalname();

                $file->move(public_path('/assets/images'), $name);


                $serviceimage = new ProjectImage();

                $serviceimage->image_path = $name;

                $serviceimage->project_id = $request->project_id;

                $serviceimage->save();
            }

            return $this->_response_body(true);

        }
        $projects = Project::all();
        $project_images = ProjectImage::OrderBy('id', "ASC")->paginate(10);
        return view('admin.project.project_image_list', compact('projects', 'project_images'));
    }

    public function projectimage_delete($id)
    {
        $project_image = ProjectImage::find($id);

        $path = public_path() . "assets/images/{$project_image->image_path}";
        if (File::delete(public_path("assets/images/" . $project_image->image_path))) {
            $project_image->delete();
        }
        Session::flash('message_danger', 'Project successfully deleted.');
        return redirect()->back();
    }


}



