@section("header")

    @include("partials.general.pagesheader")

@endsection

@extends("layouts.general.master")

@section("body")
<!-- body -->
    <div class="about" id="about">
        <div class="container">
            <h3 class="tittle-w3l tut">Register Here</h3>
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
                    <h3>Signup as a Tutor Now!</h3>
                    <div class="agileinfo_banner_bottom_right1_grid">
                        <form action="{{ route('register') }}" method="post">	
                             {{ csrf_field() }}	
                             <input  name="typeOfUser" type="hidden" value="tutor">
                            <input type="text" name="name" placeholder="Name"  value="{{ old('name') }}" required="">

                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                             @endif

                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <input type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required="">
                            @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
                    <h3>Signup as a Student</h3>
                    <div class="agileinfo_banner_bottom_right1_grid">
                    <form action="{{ route('register') }}" method="post">	
                             {{ csrf_field() }}	
                             <input  name="typeOfUser" type="hidden" value="student">
                            <input type="text" name="name" placeholder="Name"  value="{{ old('name') }}" required="">

                            @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                             @endif

                            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif

                            <input type="tel" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required="">
                            @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
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