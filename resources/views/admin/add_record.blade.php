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
                        <div class="progress" data-percentage="0">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                                <div style="padding-left:85%">
                                    0%<br>
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
                <form class="form-group" action="{{ route('store-record') }}" method="POST">
                    @csrf
                   <div class="row">
                       <div class="col-3">
                            <label for="nm">Name:</label>
                       </div>                   
                       <div class="col-3">
                            <input class="form-control" type="text" name="sure_name" id="nm" value="{{ old('sure_name') }}" required="required" placeholder="Enter Your Sur Name">
                            <span>Give Sur Name</span>
                       </div>                   
                       <div class="col-3">
                            <input class="form-control" type="text" name="name" id="nm" placeholder="Enter Name"  value="{{ old('name') }}"  required="required">
                            <span>Give Name</span>
                        </div>                   
                       <div class="col-3">
                            <input class="form-control" type="text" name="tracking_id" id="traking" value="{{ old('tracking_id') }}"  placeholder="Enter Your Traking ID" required="required">
                            <span>Give Tracking ID</span>
                       </div>
                   </div>
                   <br>
                   <div class="row">
                       <div class="col-3">
                            <label for="birth">Date of Birth</label>
                       </div>
                       <div class="col-3">
                            <input class="form-control" type="date" name="dob" id="birth" required="required"  value="{{ old('dob') }}" >
                           <span>MM-DD-YY</span>
                       </div> 
                       <div class="col-3">
                            <label for="birth">Progress (%)</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="progress" id="place" value="{{ old('progress') }}"  placeholder="Enter Progress In Percent Value" required="required">
                        </div>
                   </div>
                    <br>
                   <div class="row">
                       <div class="col-3">
                           <label for="place">Birth Place</label>
                        </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="birth_place" id="place" value="{{ old('birth_place') }}"  placeholder="Enter Your Birth place" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Birth ID Number</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="birth_id" id="pass" value="{{ old('birth_id') }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                   </div>
                  <div class="row">
                       <div class="col-3">
                           <label for="pass">Passport Number</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="passport_no" id="pass" value="{{ old('passport_no') }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Passport Issue Date</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="date" name="passport_issue_date" id="pass" value="{{ old('passport_issue_date') }}"  placeholder="Enter Your Passport Number" required="required">
                           <span>MM-DD-YY</span>
                       </div>
                  </div>
                  <br>
                   <div class="row">
                       <div class="col-3">
                           <label for="pass">Father's Name</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="father_name" id="pass" value="{{ old('father_name') }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Mother's Name</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="mother_name" id="pass" value="{{ old('mother_name') }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                   </div>
                   <br>
                   <div class="row">
                       <div class="col-3">
                           <label for="pass">Solicitor's Name</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="solicitor_name" id="pass" value="{{ old('solicitor_name') }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                       <div class="col-3">
                           <label for="pass">Purpose</label>
                       </div>
                       <div class="col-3">
                           <input class="form-control" type="text" name="purpose" id="pass" value="{{ old('purpose') }}"  placeholder="Enter Your Passport Number" required="required">
                       </div>
                   </div>
                    <br>
                    <center>
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="all-button btn btn-primary" value="Save">
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