<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displaying all users
        $users = User::all();
        return view('users.list',['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('form-signup testing');
        return view('users.form_signup');
        // return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        dd($request->all());

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg',

        ]);

        $img = $request->avatar;
        $img_name = md5(rand(1000,10000));
        $ext = strtolower($img->getClientoriginalExtension());
        $img_full_name = $img_name.'.'.$ext;
        $upload_path = 'user_images/';
        $img_url = $upload_path.$img_full_name;
        $img->move($upload_path,$img_full_name);
        $image = $img_url;

        if($request->status){
            $status = $request->status;
        }else{
            $status = 0;
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'img' => $image,
            'status' => $status,
        ]);

        return redirect()->back();

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
        //
        $user = User::where('id',$id)->first();
        return view('users.edit',['user'=>$user]);
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
        //

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'avatar' => 'image|mimes:jpeg,png,jpg',
        ]);
        // dd($request->all());
        $user = User::where('id',$id)->first();

        if($request->file('avatar')){
            $img = $request->avatar;
            $img_name = md5(rand(1000,10000));
            $ext = strtolower($img->getClientoriginalExtension());
            $img_full_name = $img_name.'.'.$ext;
            $upload_path = 'user_images/';
            $img_url = $upload_path.$img_full_name;
            $img->move($upload_path,$img_full_name);
            $image = $img_url;    
            $user->img = $image;

        }
        // dd($request);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();

        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::where('id',$id)->first();
        $user->delete();
        return redirect()->back();
    }
}
