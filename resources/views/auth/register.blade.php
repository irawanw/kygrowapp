@extends('layouts.app')

@section('header-left')
    @if (Auth::guest())
        {{-- expr --}}

         <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
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

    <section id="signup" class="signup no-padding" style="margin-top: 20px">
        <div class="container">
            <div class="row">

                <div class="col-md-12" align="center">
                    <h2 class="intro-title white">
                        <span class="title-head">Free Forever. Sign up in 5 steps</span>
                    </h2>
                </div>

                <div class="col-md-12 col-sm-offset-2">
                    <form class="form-row signup-email" method="POST" action="{{ route('register') }}">    {{ csrf_field() }}

                        <div class="col-sm-3 col-sm-offset-1 col-xs-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="sr-only" for="user-email">First Name</label>
                            <input id="name" type="text" class="form-control sign-up-input" name="name" value="{{ old('name') }}" required autofocus placeholder="First Name">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif                                    
                        </div>

                        <div class="col-sm-3 col-xs-12 ">
                            <label class="sr-only" for="user-email">Last Name</label>
                            <input type="text" class="form-control sign-up-input" id="last-name" placeholder="Last Name" name="last-name" value="{{old('last-name')}}" >
                        </div>
                        <div>
                            <div class="col-sm-6 col-sm-offset-1 col-xs-12 margin-form-cust {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="sr-only" for="user-email">example@email.com</label>

                                <input id="email" type="email" class="form-control sign-up-input" name="email" value="{{ $email or old('email') }}" required placeholder="Email">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif                            

                            </div>
                            <div class="col-sm-6 col-sm-offset-1 col-xs-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="sr-only" for="user-email">Password</label>

                                <input id="password" type="password" class="form-control sign-up-input" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <input id="password-confirm" type="password" class="form-control sign-up-input" name="password_confirmation" required placeholder="Confirm Password" style="margin-top: 10px;">
                            

                            </div>
                            <div>
                                <div class="col-sm-6 col-sm-offset-5 col-xs-12 send-email send-started">
                                    <button type="submit" class="btn btn-primary btn-started">Get Started</button>
                                </div>
                            </div>
                        </div>      


                    </form>
                </div>

                <div class="col-md-8 col-md-offset-2" align="center" style="padding-top: 40px; padding-bottom: 40px;">
                    <h5 class="white">By signing up for KyGrow, you agree to our <a href="https://www.kyleads.com/terms/">terms</a> and <a href="https://www.kyleads.com/privacy/">privacy </a>policy.</h5>
                </div>
            </div>
        </div>
    </section>

    <section style="height: 160px;">   
        
    </section>
@endsection
