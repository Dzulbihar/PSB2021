@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					MADRASAH DINIYAH ASKHABUL KAHFI				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('madrasahdiniyah')}}"> Madrasah Diniyah Askhabul Kahfi</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- ___________________________________________________________________________________________________________________  -->

<section class="popular-course-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1> AHMAD DZUL BIHAR </h1>
					<h1 class="mb-10">Popular Courses we offer</h1>
					<p>There is a moment in the life of any aspiring.</p>
				</div>
			</div>
		</div>						



		</div>
	</div>	
</section>

@stop