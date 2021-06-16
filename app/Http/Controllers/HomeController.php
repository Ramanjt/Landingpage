<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class HomeController extends Controller
{
    function register(Request $req) {


        $req->validate([ 
            'name'=>'required|max:50',
            'email'=>'required|email',
            'phone'=>'required|max:10',
            'address'=>'required|max:50'
        ]);

        $data=new Register;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->address=$req->address;
        $data->save();

        $req->session()->flash('message','Successfully Submitted Registration Form');

        return redirect('/register');
    }
}
