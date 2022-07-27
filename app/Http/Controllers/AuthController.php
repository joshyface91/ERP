<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }
    public function registration() {
        return view("auth.registration");
    }
    public function registerUser(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:20',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'You have registered successfully');
        }else{
            return back()->with('fail', 'Something wrong');
        }
    }
    public function loginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:20',
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if($user){
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Password Invalid');
            }
        }else{
            return back()->with('fail', 'This Username is not registered');
        }
    }
    public function dashboard(){
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function logout(){
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
