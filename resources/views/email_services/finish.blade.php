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
        <a href="#" type="button" class="btn btn-primary btn-circle">3</a>
        <p>Step 3</p>
      </div>
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-primary btn-circle">4</a>
        <p>Step 4</p>
      </div>
      <div class="stepwizard-step">
        <a href="#" type="button" class="btn btn-primary btn-circle">5</a>
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
	                <span class="title-head">Install the list goal dashboard</span>
	                
	            </h2>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-6 col-md-offset-3">
		        <div class="col-md-12" align="center">
					<div class="well goals " id="sub-100" >
							<img src="{{ url('images/icons/chrome.ico') }}" width="100px;" style="position: absolute;top: -40px; left: 42%;" >
							<br>
							<h1>Google Chrome</h1>
							<p>This will keep you focuses on your goal, by updating your daily and total progress in realtime.</p>
							<p>Seeing your goal every time you open a new tab will also motivate you to do the work</p>
					</div>
		        </div>
	        </div>

	        <div class="clearfix"></div>
	        <div class="col-md-12" align="center" style="margin-bottom: 20px;" >
	        	<a href="{{ url('dashboard') }}" class="btn btn-danger" >
	        		Goto dashboard
	        	</a>
	        </div>

	    </div>
	</div>
@endsection
@section('script')
<script type="text/javascript">
</script>
@endsection