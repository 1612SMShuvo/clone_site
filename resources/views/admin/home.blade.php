@extends('layouts.main')

@section('content')

        <div class="container border">
            <center>
                <div class="row col-10">
                    <div class="col-3">
                        <img src="{{ asset('asset/img/london.png') }}" class="flag-img-left" alt="london flag">
                    </div>
                    <div class="col-6">
                        <h4 class="mt-5">Visa status (valid for work)</h4>
                        <div class="progress blue">
                            <span class="progress-left">
                            <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">90%</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('asset/img/london.png') }}" class="flag-img-right" alt="london flag">
                    </div>
                </div>
            </center>
            <div class="form_part form-group">
                <a href="{{ route('add-record') }}"><button class="all-button btn btn-success mb-2">Add Record</button></a>
                @if(session()->has('message'))
                    <div class="alert alert-success mt-3">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sl No.</th>
                            <th>Sur Name</th>
                            <th>Name</th>
                            <th>Tracking ID</th>
                            <th>Birth Info</th>
                            <th>Passport Info</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Solicitor Name</th>
                            <th>Purpose</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1; @endphp
                        @foreach($records as $record)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $record->sure_name }}</td>
                            <td>{{ $record->name }}</td>
                            <td>{{ $record->tracking_id  }}</td>
                            <td>
                                Date of Birth: {{ $record->dob  }}<br>
                                Place of Birth: {{ $record->birth_place  }}<br>
                                Birth ID: {{ $record->birth_id  }}<br>
                            </td>
                            <td>
                                Passport No.: {{ $record->passport_no  }}<br>
                                Passport Issue Date: {{ $record->passport_issue_date  }}<br>
                            </td>
                            <td>{{ $record->father_name  }}</td>
                            <td>{{ $record->mother_name  }}</td>
                            <td>{{ $record->solicitor_name  }}</td>
                            <td>{{ $record->purpose  }}</td>
                            <td> 
                                <a href="{{ route('edit-record',$record->id) }}" class="text-primary" style="font-size:1.5em !important;" role="button" title="Edit">
                                    <i class="fa-solid fa-pen-nib"></i>
                                </a>
                                <a href="{{ route('remove-record',$record->id) }}" class="text-danger" style="font-size:1.5em !important;" role="button" title="Delete">
                                    <i class="fa-solid fa-ban"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                  @if ($records->lastPage() > 1)
                    <ul class="pagination">
                        <li class="{{ ($records->currentPage() == 1) ? ' disabled' : '' }}">
                            <a href="{{ $records->url(1) }}">Previous</a>
                        </li>
                        @for ($i = 1; $i <= $records->lastPage(); $i++)
                            <li class="{{ ($records->currentPage() == $i) ? ' active' : '' }}">
                                <a href="{{ $records->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li class="{{ ($records->currentPage() == $records->lastPage()) ? ' disabled' : '' }}">
                            <a href="{{ $records->url($records->currentPage()+1) }}" >Next</a>
                        </li>
                    </ul>
                    @endif
            </div>
        </div>
            <style>
                .progress{
                    display: none;
                }
            </style>
            
@endsection