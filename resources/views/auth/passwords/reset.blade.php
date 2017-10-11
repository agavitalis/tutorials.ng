@section('header')

@include("partials.general.pagesheader")

@endsection

@extends("layouts.general.master")

@section('body')

<div class="about" id="about">
        <div class="container">
            <h3 class="tittle-w3l tut">Reset your Password</h3>
        <h5 class="tittle-w3l">Join millions of others at tutorials.ng</h5>     
        <div class="tab-content">
            <div class="col-md-8 col-sm-8  col-md-offset-2 col-sm-offset-2agileinfo_banner_bottom_right">
                <ul class="nav nav-tabs choose">
                <li class="active"><a data-toggle="tab" href="#home">As a Tutor</a></li>
                  <li><a data-toggle="tab" href="#menu1">As a Student</a></li>
                </ul>
            </div>

            <div class="col-md-8 col-sm-8  col-md-offset-2 col-sm-offset-2agileinfo_banner_bottom_right tab-pane fade in active" id="home" >
                <div class="agileinfo_banner_bottom_right1">	
                    <h3>Enter New Tutor Credentials!</h3>
                    <div class="agileinfo_banner_bottom_right1_grid">
                        <form action="{{ route('password.request') }}" method="post">	
                             {{ csrf_field() }}	
                             <input  name="typeOfUser" type="hidden" value="tutor">

                            <input type="email" name="email" placeholder="Email" value="{{ $email or old('email') }}" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif


                            <input type="password" name="password" placeholder="Password"  required="">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                           
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"  required="">
                           
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-8  col-md-offset-2 col-sm-offset-2agileinfo_banner_bottom_right tab-pane fade" id="menu1">
                <div class="agileinfo_banner_bottom_right1">	
                    <h3>Enter New Student Credentials</h3>
                    <div class="agileinfo_banner_bottom_right1_grid">
                    <form action="{{ route('password.request') }}" method="post">	
                             {{ csrf_field() }}	
                             <input  name="typeOfUser" type="hidden" value="student">

                            <input type="email" name="email" placeholder="Email" value="{{ $email or old('email') }}" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif


                            <input type="password" name="password" placeholder="Password"  required="">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                           
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"  required="">
                           
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
