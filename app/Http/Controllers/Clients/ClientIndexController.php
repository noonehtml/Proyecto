<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientIndexController extends Controller
{
    public function index()
    {
        return view('client.index');

    }
}
