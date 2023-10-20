<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Session;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users  = User::all();
        return view('admin.user.user_list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('admin.user.user_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|max:255',
            'role'=>'required|max:255',

        ]);

        if ($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();

        }
        if ($request->isMethod('post')) {

          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->role= $request->role;
          $user->password = bcrypt($request->password);
          $user->created_at = Carbon::now();
          $user->updated_at = Carbon::now();
          if ($user->save()){
              Session::flash('message_info', 'Admin successfully Add.');
              return redirect('admin/user');
          }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user  = User::find($id);
        return view('admin.user.user_edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validate = Validator::make($request->all(),[
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'password' => 'required|confirmed|min:6',
            'role'=>'required|max:255',

        ]);

        if ($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();

        }
//        dd($request->all());
        $user =User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role= $request->role;
        $user->password = bcrypt($request->password);
        $user->updated_at = Carbon::now();

        if ($user->update()){
            Session::flash('message_info', 'Admin successfully update.');
            return redirect('admin/user');
        }
        else{
            return redirect('/error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user  = User:: find($id);
        $user->delete();
        Session::flash('message_danger', 'Agent successfully deleted.');
        return redirect('admin/user');
    }
}
