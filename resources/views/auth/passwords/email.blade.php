
@section('header')

    @include("partials.general.pagesheader")

@endsection

@extends("layouts.general.master")

@section('body')


<div class="about" id="about">
        <div class="container">
            <h3 class="tittle-w3l tut">Password Recovery</h3>
        <h5 class="tittle-w3l">Forgot your Password? don't worry we help you recover it</h5>     
        <div class="tab-content">
            <div class="col-md-8 col-sm-8  col-md-offset-2 col-sm-offset-2agileinfo_banner_bottom_right">
                <ul class="nav nav-tabs choose">
                <li class="active"><a data-toggle="tab" href="#home">As a Tutor</a></li>
                  <li><a data-toggle="tab" href="#menu1">As a Student</a></li>
                </ul>
            </div>

            <div class="col-md-8 col-sm-8  col-md-offset-2 col-sm-offset-2agileinfo_banner_bottom_right tab-pane fade in active" id="home" >
                <div class="agileinfo_banner_bottom_right1">	
                    <h3>Recover your tutor Password!</h3>
                    <div class="agileinfo_banner_bottom_right1_grid">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form  action="{{ route('password.email') }}" method="post">	
                             {{ csrf_field() }}	
                             <input  name="typeOfUser" type="hidden" value="tutor">

                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <input type="submit" value="Recover Password ">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-8  col-md-offset-2 col-sm-offset-2agileinfo_banner_bottom_right tab-pane fade" id="menu1">
                <div class="agileinfo_banner_bottom_right1">	
                    <h3>Recover your student Password</h3>
                    <div class="agileinfo_banner_bottom_right1_grid">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form  action="{{ route('password.email') }}" method="post">	
                             {{ csrf_field() }}	
                             <input  name="typeOfUser" type="hidden" value="student">

                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <input type="submit" value="Recover Password">
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="clearfix"> </div>
        </div>
    </div>

@endsection
