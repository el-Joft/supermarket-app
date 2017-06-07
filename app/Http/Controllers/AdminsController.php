<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminsController extends Controller
{
    //


    public function signin(Request $request)
    {
        $method = $request->isMethod('post');
            switch ($method) {
                case true:
                        $this->validate($request, [
                            'email' => 'required|min:4',
                            'password' => 'required|min:4'
                        ]);
                        $authenticate_user = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
                        if ($authenticate_user) {
                            // return back()->with('success','Welcome Admin');
                            return redirect('admin/product')->with('success', 'Welcome Admin');
                        }else{
                            return back("/admin")->with('delete_message', 'Wrong Email or Password');
                        }
                break;
                case false:
                    if (Auth::check()) {
                        return redirect('/admin');
                    }
                    return view('superuser.index');
                break;
                default:
                    if (Auth::check()) {
                        return redirect('/admin');
                    }
                    return view('superuser.index');
                break;
            }
    }

    public function signup(Request $request)
    {
         $method = $request->isMethod('post');
            switch ($method) {
                case true:
                        $this->validate($request, [
                            'email' => 'required|unique:users',
                            'password' => 'required|min:4',
                            'confirm_password' => 'required|min:4'
                        ]);
                        $password = $request->input('password');
                        $confirm_password = $request->input('confirm_password');
                        if ($password === $confirm_password) {
                            $role = Role::where('name', 'Admin')->first();
                            $user = new User([
                              'email' => $request->input('email'),
                              'password' => Hash::make($password),
                              ]);
                            $user->role()->associate($role);
                            $user->save();
                            return back()->with('success','Admin created successfully!');
                        }else{
                            return back()->with('delete_message', 'Password does not match!');
                        }
                break;
                case false:
                    return view('/admin/create');
                break;
                default:
                    return view('/admin/create');
                break;
            }
    }

     public function create()
    {
        //


        return view('superuser.create');
    }

}


