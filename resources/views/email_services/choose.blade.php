@extends('layouts.app')

@section('header-left')
	<div class="stepwizard ">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-primary btn-circle">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
        <p>Step 4</p>
      </div>
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
        <p>Step 5</p>
      </div>
    </div>
  </div>
@endsection

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-12" align="center">
	            <h2 class="intro-title white">
	                <span class="title-head">Integrate with your email marketing service</span>
	                
	            </h2>
	        </div>
	    </div>
	    <div class="row">
	        @foreach ($mails as $mail)
	        	<div class="col-md-3" align="center">
					<div class="well services_icon">
						<a href="{{ url('service/'.$mail->id) }}">
							<img src="{{ url('images/icons/'.$mail->image) }}" style="max-width: 100%;">
							<p>{{$mail->mail_name}}</p>
						</a>
					</div>
		        </div>
	        @endforeach
	        

	        <div class="clearfix"></div>
	        <div class="col-md-12" align="center">
	        	<p style="color: white;" ><i>Don't have an Email Service Provider? <a href="#"><u>Click Here</u></a></i></p>
	        </div>

	    </div>
	</div>
@endsection