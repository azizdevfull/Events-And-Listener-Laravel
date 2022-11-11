<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function subscribe(Request $request)
    {
       $request->validate([
        'email' => 'required|unique:newsletter,email'
       ]); 

       event(new UserSubscribed($request->input('email')));
       
       return back();
    }
}
