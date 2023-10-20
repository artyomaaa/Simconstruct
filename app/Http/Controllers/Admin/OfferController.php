<?php

namespace App\Http\Controllers\Admin;

use App\Http\Services\StatusCode;
use App\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Session;

class OfferController extends Controller
{
    public function Offer_list()
    {
        $offers = Offer::all();
        return view('admin.offer.offer_list', compact('offers'));
    }

    public function offer_add(Request $request)
    {

        if ($request->isMethod('post')) {

            $rules = [
                'title_es' => 'required',
                'title_eng' => 'required',
                'text_es' => 'required',
                'text_eng' => 'required',
                'icone' => 'required',
                'image' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
            }

            if ($request->hasFile('image')) {
                $input = $request->except('_token', 'image');
                $file = $request->image;
                $name = time() . '_' . $file->getclientOriginalname();
                $file->move(public_path('/assets/images/'), $name);
                $offer = new Offer();
                $offer->image = $name;
                $offer->fill($input);
                if ($offer->save()) {
                    return $this->_response_body(true);

                }
            }


        }
        return view('admin.offer.offer_add');
    }

    public function offer_delete($id)
    {

        $offer = Offer::find($id);
        $path = public_path() . "assets/images/{$offer->image}";
        if (File::delete(public_path("assets/images/" . $offer->image))) {
            $offer->delete();
            Session::flash('message_danger', 'Project successfully deleted.');
            return redirect()->back();

        }


    }

    public function offer_update(Request $request, $id)
    {

        if ($request->isMethod('post')) {

            $rules = [
                'title_es' => 'required',
                'title_eng' => 'required',
                'text_es' => 'required',
                'text_eng' => 'required',
                'icone' => 'required',
                'new_image' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
//                return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
            }
            $offer = Offer::find($id);

            if ($request->new_image) {
                File::delete(public_path("assets/images/" . $offer->image));

            }
            $input = $request->except('token', 'new_image');
            $file = $request->new_image;

            $name = time() . '_' . $file->getclientOriginalname();
            $file->move(public_path('/assets/images/'), $name);
            $offer->image = $name;
            $offer->fill($input);
            if ($offer->update()) {
//                return $this->_response_body(true);
                Session::flash('message_info', 'Project successfully updated.');
                return redirect()->back();

            }
        }
    }
}