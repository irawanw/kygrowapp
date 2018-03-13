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
	                <span class="title-head">Choose your list goal</span>
	                
	            </h2>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-6 col-md-offset-3">
		        <div class="col-md-6" align="center">
					<div class="well goals " id="100" >
						
							<h1 id="100">100</h1>
							<h3 id="100">Subscriber</h3>
						
					</div>
		        </div>
		        <div class="col-md-6" align="center">
					<div class="well goals " id="1000" >
						
							<h1 id="1000" >1,000</h1>
							<h3 id="1000" >Subscriber</h3>
						
					</div>
		        </div>
	    	</div>
	    	<div class="col-md-6 col-md-offset-3">
		        <div class="col-md-6" align="center">
					<div class="well goals " id="10000" >
						
							<h1 id="10000" >10,000</h1>
							<h3 id="10000" >Subscriber</h3>
						
					</div>
		        </div>
		        <div class="col-md-6" align="center">
					<div class="well goals " id="own" >
							<h3 id="own" >Choose your <br> Own Goal </h3>
					</div>
		        </div>
	    	</div>

	        <div class="clearfix"></div>
	        <div class="col-md-12" align="center" style="margin-bottom: 20px;" >
	        	<form action="{{ url('finish') }}" method="POST" >
	        		{{csrf_field()}}
	        		<input type="hidden" name="goals" id="goal_plan" >
		        	<button type="submit" class="btn btn-danger" >Finish Setting up</button>
	        	</form>
	        </div>

	    </div>
	</div>
	<style type="text/css">	
		.goals{
			min-height: 170px;
		}
		.goals:hover{
			background: #004D91;
			transition: 0.2s;
			color:#FFF;
			cursor: pointer;
		}
		.goals:hover h3{
			color:#FFF;
			cursor: pointer;
		}
		.goals:hover h1{
			color:#FFF;
			cursor: pointer;
		}
		.goalsactive{
			background: #004D91;
			transition: 0.2s;
			color:#FFF;
		}
		.goalsactive h1{
			color:#FFF;
		}
		.goalsactive h3{
			color:#FFF;
		}
	</style>
@endsection
@section('script')
<script type="text/javascript">
		$('.goals').click(function (event) {
			$('.goals').removeClass('goalsactive');
			$(this).addClass('goalsactive');
			if(event.target.id == 'own'){
				$('#goal_plan').fadeIn();
			} else {
				$('#goal_plan').val(event.target.id);
			}
		});
	</script>
@endsection