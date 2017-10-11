@section("header")

    @include("partials.general.pagesheader")

@endsection

@extends("layouts.general.master")

@section("body")

   <!-- Team/Tutors -->
<div class="team" id="faculties">
	<div class="container">
		<h3 class="tittle-w3l tut">Search Results</h3>
		<h5 class="tittle-w3l">Our Tutors are hand-picked, tutors that you can trust</h5>
		<div class="agile_banner_bottom_grids">
		@foreach($tutors as $tutor)
			<div class="col-md-3 col-sm-3 col-xs-3 agile_banner_bottom_grid">
				<div class="w3layouts_banner_bottom_grid">
					<img src="{{ $tutor->passport }}" alt=" " class="img-responsive" />
					<div class="w3layouts_banner_bottom_grid_pos">
						<p>tNG Name:Vita@tng</p>
						<p>Location:{{$tutor->state}}</p>						
					</div>
				</div>
				<h4>English Tutor --- <span>{{$tutor->name}}</span></h4>
				<p>We make the fit.</p>
				<div class="social-bnr-agileits">
				<ul>
					<li><a href="/details/{{$tutor->email}}"><button>Details &nbsp<i class="fa fa-eye" aria-hidden="true"></i></button></a></li>			
				</ul>
				</div>
			</div>
		@endforeach

		{{$tutors->links()}}
			
		</div>
	</div>
</div>




<!--slider for featured tutors-->
<div class="team" id="facult">
		<h3 class="tittle-w3l tut">Featured tutors</h3>
		<h5 class="tittle-w3l">Our Tutors are hand-picked, tutors that you can trust</h5>
	<ul id="flexiselDemo1">	
		
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
	</ul>
</div>
<!-- slider ends -->



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