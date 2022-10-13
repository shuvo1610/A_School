<?php

namespace App\Http\Controllers;

use App\Mail\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index()
    {
        $data=[
            //'users'=>Users::all()->except(Auth::id())
            'users'=>Users::Where('id','!=', Auth::id())->get()
        ];
        return view('user.index',$data);
    }

    public function edit($id)
    {
        $data=[
            'user'=>Users::find($id)
        ];
        return view('user.edit',$data);
    }

    public function update(Request $request,$id)
    {
        $user=Users::find($id);
        $input=$request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $destinationPath . $profileImage;
        }
        $user->update($input);
        return redirect()->route('user.index');
    }

    public function profile($id)
    {
        $data=[
            'user'=>Users::find($id)
        ];
        return view('user.profile',$data);
    }

    public function destroy($id)
    {
        Users::destroy($id);
        return back();
    }

    public function authProfile()
    {
        return view('user.authprofile');
    }

    public function updateProfile(Request $request)
    {
        $user=auth()->user();
        $data =$request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $data['image'] = $destinationPath . $profileImage;
        }
        $user->update($data);

        return redirect()->route('user.index');
    }

    public function resetPassword()
    {
        return view('user.resetpassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        $user=auth()->user();
        if(!Hash::check($request->current_password, $user->password)){
            return back()->with(["error"=>"Current Password Doesn't match!"]);
        }

        $data=[
            'password'=>Hash::make($request->new_password)
        ];
        $user->update($data);
        return redirect()->route('auth.login');
    }

    public function findUser()
    {
        return view('user.forgotpass');
    }

    public function getUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',

        ]);
        $user = Users::where('email', $request->email)->first();
        $data = [
            'title' => 'Reset your Password',
            'user' => $user
        ];

        Mail::to('spagreen@gmail.com')->send(new \App\Mail\forgot($data));
        return back()->with(['Success' => 'We will send a link to reset your password']);
    }

    public function setPass($id)
    {
        $data=[
            'user'=>Users::find($id)
        ];
        return view('user.setPass',$data);
    }

    public function store(Request $request,$id)
    {
        $user=Users::find($id);
        $request->validate([
            'new_password' => 'required|confirmed',
        ]);
        $data=[
            'password'=>Hash::make($request->new_password)
        ];
        $user->update($data);
        return redirect()->route('auth.login')->with(['Success'=>'Your password successfully Change']);
    }

}
