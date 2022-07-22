<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('form');
    }

    public function store(FormDataRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required',
        ]);

        $validate = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required',
        ],[
            'name.required' => 'Name is must.',
            'name.min' => 'Name must have 5 char.',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        dd($request->all());
    }
}
