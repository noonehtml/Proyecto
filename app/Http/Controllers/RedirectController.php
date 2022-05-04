<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class RedirectController extends Controller
{

    public function index()
    {

        if(Auth::user()){

            if( Auth::user()->hasRole('admin') ){
                return view('admin.index');
            }

            if( Auth::user()->hasRole('client') ){
                return view('client.index');
            }

            if( Auth::user()->hasRole('lawyer') ){
                return view('lawyer.index');
            }
        }

        return view('home');
    }
}
