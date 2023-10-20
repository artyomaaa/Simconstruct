<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\StatusCode;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{

    public function slider_list(Request $request)
    {
        $images = Slider::orderby('sort_id', 'Asc')->get();
        return view('admin.slider.slider_list', compact('images'));
    }

    public function slider_add(Request $request)
    {
        if ($request->isMethod('post')) {


            $rules = [
                'path' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
            }
            if ($request->hasFile('path')) {
                $file = $request->path;
                foreach ($file as $slider) {
                    $name = time() . '_' . $slider->getclientOriginalname();
                    $slider->move(public_path('/assets/images/'), $name);
                    $slider = new Slider();
                    $slider->path = $name;
                    if ($slider->save()) {
                        return $this->_response_body(true);
//                        if ($slider->save()) {
//                            if ($slider->id == 0) {
//                                $slider->sort_id = 1;
//                                $slider->save();
//                            } else {
//                                $slider->sort_id = $slider->id;
//                                $slider->save();
//                            }
//                        };
                    }
                }
            }
        }
        return view('admin.slider.slider_add');
    }

    public function delete_image(Request $request, $id)
    {
        $newimg = Slider::find($id);
        $path = public_path() . "assets/images/{$newimg->path}";
        if (File::delete(public_path("assets/images/".$newimg->path))) {
            $newimg->delete();
        }
        return redirect()->back();
    }

    public function change_image_order(Request $request)
    {
        sleep(2);
        $position = 1;
        foreach ($request->ids as $id) {

            Slider::where('id', $id)->update(['sort_id' => $position]);
            $position++;
        }
        return 'ok';
    }


}
