<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackApplication;
use App\Models\Record;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = Record::paginate(10);
        return view('admin.home',compact('records'));
    }
    public function create()
    {
        return view('admin.add_record');
    }
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function track_form()
    {
        return view('track.form');
    }
}
