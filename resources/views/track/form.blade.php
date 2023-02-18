<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
       <title>Track Your Application</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="{{ asset('asset/style.css') }}">
		<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body>
        <div class="header_part row">
            <div class="header_logo col-2">
                <a href="#">
                    <img src="{{ asset('asset/img/logo.jpg') }}" alt="logo">
                </a>
            </div>
            <div class="header_name col-4">
                <div class="header_name_vfs">
                    <h3>vfs.global</h3>
                    <br>
                    <p class="header_name_year">est.2001</p>
                </div>
            </div>
            
            <div class="col-6">
                
                <p class="header-right-text">Apply For Visa To UK<img src="{{ asset('asset/img/uklogo.png') }}"> Bangladesh</p>
            </div>
        </div>
        
        <div class="container border">
            <div class="form_part form-group">
				<form class="form-group" action="{{ route('search-record')}}" method="POST">
					@csrf
					<div class="row">
						<div class="col-5">
							<h2>Track Your Application</h2>
							<div class="row">
								<div class="col-6">
									<label for="place">Tracking ID No.</label>
								 </div>
								<div class="col-6">
									<input class="form-control" type="text" name="tracking_id" id="place" placeholder="Tracking ID No." required="required">
								</div>
								<div class="col-6">
									<label for="pass">Birth Date</label>
								</div>
								<div class="col-6">
									<input class="form-control" type="date" name="dob" id="pass" placeholder="Enter Your Birth Date" required="required">
								</div>
								<div class="col-6">
									<label class="col-md-4 control-label">Captcha</label>
								</div>
								<div class="col-6">
									<div class="form-group{{ $errors->has('CaptchaCode') ? ' has-error' : '' }}">
										<input class="form-control" type="text" id="CaptchaCode" name="CaptchaCode">
										@if ($errors->has('CaptchaCode'))
											<span class="help-block" style="height: 100px; width:200px;">
												<strong>{{ $errors->first('CaptchaCode') }}</strong>
											</span>
										@endif
										<div class="col-md-6 mt-4">
											{!! captcha_image_html('ContactCaptcha') !!}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4"></div>
						<div class="col-3">
							<label for="pass">Language</label>
							<select class="form-select" name="language">
								<option value="">Select Language</option>
								<option value="Bengali">Bengali</option>
								<option value="English">English</option>
								<option value="Hindi">Hindi</option>
							</select>
						</div>
					</div>
					<center><input type="submit" class="all-button btn btn-primary" value="Track Now"></center>
				</form>
            </div>
			<hr>
			<table class="table table-bordered mt-10">
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
					</tr>
				</thead>
				<tbody>
					@if(empty($record) && $count < 1)
					<tr></tr>
					<tr></tr>
					@elseif(!empty($record))
					@php $i=1; @endphp
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
					</tr>
					@else
					<tr>
						<td colspan="10"><h5 style="text-align: center; color:red;">There Is No Data To Show..!!!</h5></td>
					</tr>
					@endif
				</tbody>
			</table>
        </div>
		<footer class="footer-custom">
			<div class="row">
				<div class="col-6"> Right Reserves By VFSGlobal.Asia@2022</div>
			</div>
		</footer>
		<script type="text/javascript">
			$(".btn-refresh").click(function(){
			  $.ajax({
				 type:'GET',
				 url:'/refresh_captcha',
				 success:function(data){
					$(".captcha span").html(data.captcha);
				 }
			  });
			});
			</script>
    </body>
</html>
