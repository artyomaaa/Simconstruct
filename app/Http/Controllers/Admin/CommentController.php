<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Services\StatusCode;
use App\Mail\MailClass;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function comment(Request $request)
    {


        $rules = [
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'text' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->_response_body($validator->messages(), StatusCode::HTTP_UNPROCESSABLE_ENTITY, 'Validation error');
        }
        $input = $request->except('_token');
        $comment = new Comment();
        $comment->fill($input);
        $data['text']= $request->text;
        $data['name']= $request->full_name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['time'] = Carbon::now();


        Mail::to('sim.sargsyan.93@gmail.com')->send(new MailClass($data));
        if ($comment->save()) {
            return $this->_response_body(true);

        }
    }

    public function comment_list()
    {
        $comments = Comment::orderBy('created_at', 'ASC')->Paginate(10);
        return view('admin.comment.comments_list', compact('comments'));
    }

    public function comment_delete($id)
    {
        $comment = Comment::find($id);
        if ($comment->delete()) {
            return redirect()->back();
        }
    }
}
