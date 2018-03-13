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
	                <span class="title-head"> {{  ucfirst($mail->mail_name) }} </span>
	                
	            </h2>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-12 well">
				<h3>Input Credential</h3>
				<hr>
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<form class="form-horizontal" id="form_cred" onsubmit="return(false)" >
							{{csrf_field()}}
							<input type="hidden" name="mailing_id" value="{{$mail->id}}" >
							@if ($mail->id == 2)
								<div class="form-group">
									<label>Your URL</label>
									<input type="text" name="url" id="url" class="form-control" placeholder="https://account.api-us1.com" >
								</div>
							@endif
							<div class="form-group">
								<label>Your API Key</label>
								<input type="text" name="key" id="key" class="form-control" >
							</div>
							@if ($mail->id == 9)
								<div class="form-group">
									<label>Your API List ID</label>
									<input type="text" name="list" id="list" class="form-control" >
								</div>
							@endif
							<div class="form-group">
								<button class="btn btn-primary" onclick="check()" >Check Connection</button>
							</div>
						</form>
					</div>
					<div class="col-md-offset-1 col-md-10" hidden id="result" >
						<h3 class="mesg" ></h3>
					</div>
				</div>
	        </div>

	    </div>
	</div>
@endsection
@section('script')
	<script type="text/javascript">
		function check() {
			$.ajax({
				url: '{{ url('check_service') }}',
				type: 'POST',
				data: $('#form_cred').serialize(),
				success: function (resp) {
					$('#result').hide();
					if( typeof resp.account_id !== 'undefined' || typeof resp.account !== 'undefined' || typeof resp.accountId !== 'undefined' || typeof resp.email !== 'undefined' || typeof resp.Results !== 'undefined'){
						$('.mesg').html("Connection Successfully");
						setTimeout(function(){ 
							sendAndSave(); 
						}, 900);
					} else {
						$('.mesg').html(resp.detail);
					}
					$('#result').fadeIn('fast');
				}
			});
		}
		function sendAndSave() {
			$.ajax({
				url: "{{ url('service/save') }}",
				data: $('#form_cred').serialize() ,
				type: "POST",
				success: function (resp) {
					if(resp.msg == 'success'){
						document.location = '{{ url('list_goal') }}?mailing_id='+resp.mailing_id;
					}
				}
			});
		}
	</script>
@endsection