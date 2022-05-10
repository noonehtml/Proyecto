<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Appoiments;
use Illuminate\Http\Request;

class AppoimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.appoiments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appoiments  $appoiments
     * @return \Illuminate\Http\Response
     */
    public function show(Appoiments $appoiments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appoiments  $appoiments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoiments $appoiments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appoiments  $appoiments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoiments $appoiments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appoiments  $appoiments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoiments $appoiments)
    {
        //
    }
}