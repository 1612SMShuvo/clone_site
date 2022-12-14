@extends('layouts.main')

@section('content')
        <div class="container border">
            <center>
                <div class="row col-10">
                    <div class="col-3">
                        <img src="{{ asset('asset/img/london.png') }}" class="flag-img-left" alt="london flag">
                    </div>
                    <div class="col-6">
                        <h2 class="mt-5">Visa status (valid for work)</h2>
                        <div class="progress" data-percentage="{{ $record->progress }}">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                                <div style="padding-left:85%">
                                    {{ $record->progress }}%<br>
                                    <span>completed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('asset/img/london.png') }}" class="flag-img-right" alt="london flag">
                    </div>
                </div>
            </center>
            <div class="form_part form-group">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin: 0;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form class="form-group" action="{{ route('edit-record',$record->id) }}" method="POST">
                    @csrf
                   <div class="row">
                       <div class="col-3">
                            <label for="nm">Name:</label>
                       </div>                   
                       <div class="col-3">
                            <input class="form-control" type="text" name="sure_name" id="nm" required="required" value="{{ $record->sure_name }}" placeholder="Enter Your Sur Name">
                            <span>Give Sur Name</span>
                       </div>                   
                       <div class="col-3">
                            <input class="form-control" type="text" name="name" id="nm" placeholder="Enter Name" value="{{ $record->name }}"  required="required">
                            <span>Give Name</span>
                        </div>                   
                       <div class="col-3">
                            <input class="form-control" type="text" name="tracking_id" id="traking" placeholder="Enter Your Traking ID"  value="{{ $record->tracking_id }}"  required="required">
                            <span>Give Tracking ID</span>
                       </div>
                   </div>
                   <br>
                   <div class="row">
                       <div class="col-3">
                            <label for="birth">Date of Birth</label>
                       </div>
                       <div class="col-3">
                            <input class="form-control" type="date" name="dob" id="birth"  value="{{ $record->dob }}"  required="required">
                           <span>MM-DD-YY</span>
                       </div> 
                       <div class="col-3">
                            <label for="birth">Progress (%)</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="progress" value="{{ $record->progress }}"  id="place" placeholder="Enter Progress In Percent Value" required="required">
                        </div>
                   </div>
                    <br>
                   <div class="row">
                       <div class="col-3">
                           <label for="place">Birth Place</label>
                        </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="birth_place" id="place" value="{{ $record->birth_place }}"  placeholder="Enter Your Birth place" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Birth ID Number</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="number" name="birth_id"  value="{{ $record->birth_id }}"  id="pass" placeholder="Enter Your Passport Number" required="required">
                       </div>
                   </div>
                  <div class="row">
                       <div class="col-3">
                           <label for="pass">Passport Number</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="passport_no" id="pass"  value="{{ $record->passport_no }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Passport Issue Date</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="date" name="passport_issue_date"  value="{{ $record->passport_issue_date }}"  id="pass" placeholder="Enter Your Passport Number" required="required">
                           <span>MM-DD-YY</span>
                       </div>
                  </div>
                  <br>
                   <div class="row">
                       <div class="col-3">
                           <label for="pass">Father's Name</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="father_name" value="{{ $record->father_name }}"  id="pass" placeholder="Enter Your Passport Number" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Mother's Name</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="mother_name" id="pass" value="{{ $record->mother_name }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                   </div>
                   <br>
                   <div class="row">
                       <div class="col-3">
                           <label for="pass">Solicitor's Name</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="solicitor_name" id="pass" value="{{ $record->solicitor_name }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Purpose</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="purpose" id="pass" value="{{ $record->purpose }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                   </div>
                    <br>
                    <center>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="all-button btn btn-primary" value="Update">
                                <a href="{{ route('home') }}"><button type="button" class="all-button btn btn-warning">Back</button></a>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-4"></div>
                        </div>
                    </center>
                </form>
            </div>
        </div>
@endsection