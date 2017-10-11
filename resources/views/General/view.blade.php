@section("header")

    @include("partials.general.pagesheader")

@endsection

@extends("layouts.general.master")

@section("body")

<!-- About -->
<div class="about" id="about">
	<div class="container">
        <h3 class="tittle-w3l">Course Detail</h3>
        <h5 class="tittle-w3l">People are learning {{$courses->coursename}}</h5>

		<div class="col-md-6 agileinfo_banner_bottom_right">
				
				
				<div class=" agileinfo_banner_bottom_right1_grid">
					<img  class="image-responsive xxc" src="{{$courses->picture}}" alt="">
				</div>
			
		</div>
		<div class="col-md-6 agileinfo_banner_bottom_left">
			<h3>{{$courses->coursename}}</h3>
			<p>{{$courses->coursedetails}}</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<div class="team" id="faculties">
	<div class="container">
    @if($tutors != null)
	<ul id="flexiselDemo1">	
		@foreach($tutors as $tutor)
		<li>
			<div class="w3layouts_banner_bottom_left">
				<div class="w3layouts_banner_bottom_grid">
					<img src="{{ $tutor->passport }}" alt=" " class="img-responsive" />
					<div class="w3layouts_banner_bottom_grid_pos">
						<p>tNG Name:Vita@tng</p>
						<p>Location:{{$tutor->state}}</p>						
					</div>
				</div>
				<h4>Web Development--- <span>Ogbonna Vitalis</span></h4>
				<p>I will teach you website development from scratch.</p>
				<div class=" eme social-bnr-agileits">
				<ul>
					<li><a href="/details/{{$tutor->email}}"><button>Details &nbsp<i class="fa fa-eye" aria-hidden="true"></i></button></a></li>			
				</ul>
			</div>
			</div>	
		</li>
		@endforeach
	</ul>
	@endif
</div>
</div>

<!-- newsletter -->
<div class="newsletter">
	<div class="container">
		<h3 class="tittle-w3l mod">Newsletter</h3>
		<p class="nunc nunc1">Shee.. dont tell anyone, subscribe and receive updates right at your inbox</p>
		<form action="#" method="post">
			<input type="email" name="email" placeholder="Your email..." required="">
			<input type="submit" value="Subscribe Now">
		</form>
	</div>
</div>
<!-- //newsletter -->



@endsection