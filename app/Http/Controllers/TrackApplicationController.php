<?php

namespace App\Http\Controllers;

use App\Models\TrackApplication;
use Illuminate\Http\Request;

class TrackApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = '';
        return view('track.form',compact('record'));
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
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function show(TrackApplication $trackApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(TrackApplication $trackApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrackApplication $trackApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrackApplication $trackApplication)
    {
        //
    }
}
