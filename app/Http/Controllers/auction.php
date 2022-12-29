<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auction extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function bid()
    {
        return view('bid');
    }

    public function bidview()
    {
        return view('bidview');
    }
    public function companyregister()
    {
        return view('companyregister');
    }

    public function home()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function editprofile()
    {
        return view('editprofile');
    }
    public function task()
    {
        return view('task');
    }
    public function taskdetails()
    {
        return view('taskdetails');
    }
    public function view()
    {
        return view('details');
    }

    public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
         $request->validate([
           'name' => 'required|min:3',
            'email' => 'required|email',
            'mobile' => 'required|min:10',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
         ]);
         return view('login');


    }

    public function storelogin(Request $request)
    {
         $request->validate([

            'email' => 'required|email',
            'password' => 'required',

         ]);
         return view('details');


    }
}
