@extends('layouts.app')

@section('header-left')
    @if (!Auth::guest())
        {{-- expr --}}

         <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="slider btn btn-primary">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
@else       
    <a href="{{url('login')}}" class="slider btn btn-primary">
        Login
    </a>
    @endif
@endsection

@section('content')
    <section id="signup" class="signup no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <h2 class="intro-title white">
                        <span class="title-head"> Grow Your Email List Faster</span>
                        Keep on top of growing your mailing list and instantly know what’s working and what’s not.
                    </h2>
                </div>

                <div class="col-sm-10 col-sm-offset-1">
                    <form class="form-row signup-email" method="GET" action="{{ url('register') }}" >
                        <div class="col-sm-5 col-sm-offset-1 col-xs-12 email-container">
                            <label class="sr-only" for="user-email">Email</label>
                            <input type="email" name="email" class="form-control" id="user-email" placeholder="Email">
                        </div>
                        <div class="col-sm-5 col-xs-12 send-email">
                            <button type="submit" class="btn btn-primary">Grow your mailing list faster</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-8 col-md-offset-2" align="center" style="padding-top: 40px; padding-bottom: 40px;">
                    <h5 class="white">During the sign up process, KyGrow will request access to your email marketing service so it can pull your data and give you insights in real time.</h5>
                </div>
            </div>
        </div>
    </section>


    <section id="facts" class="facts no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12" align="center">
                    <h2 class="intro-title title">
                        <span class="title-head">How It Works</span>
                    </h2>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ts-service-wrapper">
                            <div class="ts-service-icon-wrapper">
                                <span class="ts-service-icon"><i class="fa fa-pencil"></i></span>
                            </div>
                            <div class="ts-service-info">
                                <h4>1. Sign Up for KyGrow</h4>
                            </div>
                        </div>
                    </div><!-- Col 1 end -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ts-service-wrapper">
                            <div class="ts-service-icon-wrapper">
                                <span class="ts-service-icon"><i class="fa fa-envelope"></i></span>
                            </div>
                            <div class="ts-service-info">
                                <h4>2. Connect Your Email Service</h4>
                            </div>
                        </div>
                    </div><!-- Col 2 end -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ts-service-wrapper">
                            <div class="ts-service-icon-wrapper">
                                <span class="ts-service-icon"><i class="fa fa-hand-o-up"></i></span>
                            </div>
                            <div class="ts-service-info">
                                <h4>3. Choose a Monthly List Growth Goal</h4>
                            </div>
                        </div>
                    </div><!-- Col 3 end -->
                    <div class="row">

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ts-service-wrapper">
                            <div class="ts-service-icon-wrapper">
                                <span class="ts-service-icon"><i class="fa fa-chrome"></i></span>
                            </div>
                            <div class="ts-service-info">
                                <h4>4. Install the Google Chrome Extension</h4>
                            </div>
                        </div>
                    </div><!-- Col 4 end -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ts-service-wrapper">
                            <div class="ts-service-icon-wrapper">
                                <span class="ts-service-icon"><i class="fa fa-external-link"></i></span>
                            </div>
                            <div class="ts-service-info">
                                <h4>5. Get updates on your list growth every time you open a browser tab.</h4>
                            </div>
                        </div>
                    </div><!-- Col 5 end -->

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="ts-service-wrapper">
                            <div class="ts-service-icon-wrapper">
                                <span class="ts-service-icon"><i class="fa fa-home"></i></span>
                            </div>
                            <div class="ts-service-info">
                                <h4>6. Get tips on list building and conversion optimization delivered to your email.</h4>
                            </div>
                        </div>
                    </div><!-- Col 6 end -->
                </div>
            </div>
    </section>
@endsection

