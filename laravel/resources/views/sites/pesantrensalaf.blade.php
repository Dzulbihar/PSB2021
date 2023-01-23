@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					PESANTREN SALAF ROUDLOTUL MUTTAQIN				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('pesantrensalaf')}}"> Pesantren Salaf Roudlotul Muttaqin</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- ___________________________________________________________________________________________________________________  -->

<!-- Start course-details Area -->
<section class="course-details-area pt-120">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">PESANTREN SALAF  </h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf.png" >
				</div>
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf2.png" >
				</div>	
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf3.png" >
				</div>	
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf4.png" >
				</div>
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf5.png" >
				</div>
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf6.png" >
				</div>
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf7.png" >
				</div>
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf8.png" >
				</div>
				<br><br>
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/lembaga/salaf9.png" >
				</div>		
				<div class="jq-tab-wrapper" id="horizontalTab">

					<div class="jq-tab-content-wrapper">

						
					</div>
				</div>
			</div>


			<div class="col-lg-4 right-contents">
				<ul>
					<li>
						<h2 class="text-center">
							<b>LEMBAGA FORMAL KAMI</b>
						</h2>
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('smpaskhabulkahfi')}}">
							<h3><b>SMP Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('mtsaskhabulkahfi')}}">
							<h3><b>MTs Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('smkaskhabulkahfi')}}">
							<h3><b>SMK Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('maaskhabulkahfi')}}">
							<h3><b>MA Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>
					<br>
					<li>
						<a class="justify-content-between d-flex" href="{{url('mahadalyaskhabulkahfi')}}">
							<h3><b>Mahad Aly Askhabul Kahfi</b></h3>
						</a>
						<img class="img-fluid" src="{{asset('/frontend')}}/img/logosmp.jpg" width="50%">
					</li>

				</ul>
				<a href="#" class="primary-btn text-uppercase">Enroll course</a>
			</div>
		</div>
	</div>	
</section>
<!-- End course-details Area -->

@stop