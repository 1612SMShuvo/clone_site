<?php

namespace App\Http\Controllers;

use App\Models\TrackApplication;
use App\Models\Record;
use Redirect;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('track.form');
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
        $request->validate([
            'sure_name'   => 'required',
            'name'   => 'required',
            'tracking_id'   => 'required|unique:records',
            'dob'   => 'required',
            'progress'   => 'required|numeric',
            'birth_place'   => 'required',
            'birth_id'   => 'required|numeric|unique:records',
            'passport_no'   => 'required',
            'passport_issue_date'   => 'required',
            'father_name'   => 'required',
            'mother_name'   => 'required',
            'solicitor_name'   => 'required',
            'purpose'   => 'required',
        ],
        [
            'sure_name'   => 'Sure Name Is Required',
            'name'   => 'Name Is Required',
            'tracking_id'   => 'Tracking ID Is Required, Should Be Unique And Numeric Type',
            'dob'   => 'Date of Birth Is Required',
            'progress'   => 'Progress Is Required',
            'birth_place'   => 'Birth Place Is Required',
            'birth_id'   => 'Birth ID Is Required',
            'passport_no'   => 'Passport No. Is Required',
            'passport_issue_date'   => 'Passport Issue Date Is Required',
            'father_name'   => 'Father Name Is Required',
            'mother_name'   => 'Mother Name Is Required',
            'solicitor_name'   => 'Solicitor Name Is Required',
            'purpose'   => 'Purpose Is Required',
        ]);
        try{
            $record = new Record;
            $record->sure_name = $request->sure_name;
            $record->name = $request->name;
            $record->tracking_id = $request->tracking_id;
            $record->dob = $request->dob;
            $record->progress = $request->progress;
            $record->birth_place = $request->birth_place;
            $record->birth_id = $request->birth_id;
            $record->passport_no = $request->passport_no;
            $record->passport_issue_date = $request->passport_issue_date;
            $record->father_name = $request->father_name;
            $record->mother_name = $request->mother_name;
            $record->solicitor_name = $request->solicitor_name;
            $record->purpose = $request->purpose;
            $record->save();
            return Redirect::back()->with('message','Record Added Successfully...!!!');
        } catch (\Exception $th) {
            \Log::error($th->getMessage());
            return Redirect::back()->withErrors(['Record Cannot be Added...!!!'],$th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function search_show(Request $request)
    {
        // $request->validate([
        //     'captcha' => 'required|captcha'
        // ],
        // [
        //     'captcha.captcha' => 'Retry . Make Sure You Are Not a Robot.'
        // ]);
        $record = Record::where('dob',$request->dob)->where('tracking_id',$request->tracking_id)->first();
        return view('track.form',compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::where('id',$id)->first();
        return view('admin.edit_record',compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $record = Record::where('id',$id)->first();
            $record->sure_name = $request->sure_name;
            $record->name = $request->name;
            $record->tracking_id = $request->tracking_id;
            $record->dob = $request->dob;
            $record->progress = $request->progress;
            $record->birth_place = $request->birth_place;
            $record->birth_id = $request->birth_id;
            $record->passport_no = $request->passport_no;
            $record->passport_issue_date = $request->passport_issue_date;
            $record->father_name = $request->father_name;
            $record->mother_name = $request->mother_name;
            $record->solicitor_name = $request->solicitor_name;
            $record->purpose = $request->purpose;
            $record->save();

            return Redirect::back()->with('message','Record Updated Successfully...!!!');
        } catch (\Exception $th) {
            \Log::error($th->getMessage());
            return Redirect::back()->withErrors(['Record Cannot be Updated...!!!'],$th);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrackApplication  $trackApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Record::where('id',$id)->delete();
        return Redirect::back()->with('message','Record Deleted Successfully...!!!');
    }
}
