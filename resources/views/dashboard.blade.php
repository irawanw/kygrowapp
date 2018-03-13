@extends('layouts.appdashboard')
@section('content')
    <section id="facts" class="facts no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <h2 class="intro-title title">
                        <span class="title-head">Integrate your email service</span>
                        <p>Which Service do you use?</p>
                    </h2>
                </div>
                </div>
                <div class="row">

@foreach ($mails as $mail)


                    <div class="col-md-6 col-md-offset-3"  style="margin-top: 40px;" >
                        <div class="col-md-4 text-center"  >
                            <img src="{{ url('images/icons/'.$mail->image) }}" width="100px;" >
                            <h4>{{$mail->mail_name}}</h4>
                        </div>
                        <div class="col-md-8">
                            @if ( count($mail->mail_service) > 0)
                                <table class="table" >
                                    <tr>
                                        <td><b>Integration avtivated</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Target : </b> {{$mail->mail_service->goals}} Subscribers </td>
                                    </tr>
                                    <tr>
                                        <td><b>You have Subcribers</b></td>
                                    </tr>
                                </table>
                            @else    
                               <a href="{{ url('service/'.$mail->id) }}"><h4>Enable this Service</h4></a>
                            @endif
                            
                        </div>
                    </div><!-- Col 1 end -->


@endforeach
                    
                </div>
            </div>
    </section>
@endsection

