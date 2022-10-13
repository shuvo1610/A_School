<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function user_registration()
    {
        return view('auth.registration');
    }

    public function user_store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|min:6',
            'last_name' => 'required|string',
            'phone' => 'required|unique:users|min:11|max:13',
            'email' => 'required|email|unique:users',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required',
        ]);


        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $destinationPath . $profileImage;
            $input['password'] = Hash::make($request->password);
        }
        $user = Users::create($input);

        $details = [
            'title' => 'Verified Your Mail ',
            'user' => $user
        ];


        Mail::to('spagreen@gmail.com')->send(new \App\Mail\User($details));
        return redirect()->route('auth.login');
    }


    public function user_login()
    {
        return view('auth.login');
    }

    public function post_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $user = Users::where('email', $request->email)->first();
        if ($user) {
            if ($user->email_verified_at) {
                if (Auth::attempt($credentials)) {
                    return redirect()->route('dashboard')->with(['Success' => 'You have Successfully login']);
                }
                return redirect()->route('auth.login')->with(['error' => "Your Password Doesn't Match"]);
            }
            return redirect()->route('auth.login')->with(['error' => 'Your email in not Verified']);
        }
        return redirect()->route('auth.login')->with(['error' => 'Oppes! You have entered invalid user']);
    }



    public function dashboard()
    {
        return view('auth.dashboard');
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return Redirect('/');
    }

    public function Verified($id)
    {
        $user=Users::find($id);
        $data=[
            'email_verified_at'=>now()
        ];
        $user->update($data);
        return redirect()->route('auth.login');
    }

}
