@extends('layouts.frontend')

@section('content')

<section class="banner-area relative about-banner" id="home" style="background: url('{{config('sekolah.image_banner_url')}}');">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					EKSTRA KULIKULER				
				</h1>	
				<p class="text-white link-nav"><a href="{{url('/')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{url('/ekstra')}}"> Ekstra Kulikuler</a></p>
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
					<h1 class="mb-10">Kegiatan Ekstra Kulikuler</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 left-contents">
				<div class="main-image">
					<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra1.jpg" >
				</div>
				<div class="jq-tab-wrapper" id="horizontalTab">

					<div class="jq-tab-content-wrapper">

						<h3>Jam’iyyatu-l-Qurra‘ dan Tahfidz Al-Quran</h3>
						<br>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Pembelajaran Bahasa Arab dan Bahasa Inggris setiap hari.</td>
								</tr>
								<tr>
									<td>Khitobah Bahasa Inggris dan Bahasa Arab satu kali sepekan.</td>
								</tr>
								<tr>
									<td>Pidato, tilawah dan cerdas cermat dalam bahasa Arab dan Inggris.</td>
								</tr>
							</tbody>
						</table>
						<br>

						<h3>Kesenian dan Ketrampilan</h3>
						<br>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Rebana Moderen</td>
								</tr>
								<tr>
									<td>Seni Kaligrafi</td>
								</tr>
								<tr>
									<td>Teknik Komputer</td>
								</tr>
								<tr>
									<td>Teknik Otomotif</td>
								</tr>							    
							</tbody>
						</table>
						<br>						

						<h3>Kajian Ilmiah</h3>
						<br>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Membaca kitab kuning</td>
								</tr>
								<tr>
									<td>Pemaparan</td>
								</tr>							    
							</tbody>
						</table>
						<br>

						<h3>Olahraga</h3>
						<br>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Sepak bola</td>
								</tr>
								<tr>
									<td>Bola volly</td>
								</tr>
								<tr>
									<td>Seni beladiri/silat</td>
								</tr>							    
							</tbody>
						</table>
						<br> 

						<h3>Pelatihan Organisasi</h3>
						<br>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<td>Ikatan Santri Pelajar Askhabul Kahfi (ISPA)</td>
								</tr>
								<tr>
									<td>Latihan Dasar Kepemimpinan (LDK)</td>
								</tr>
								<tr>
									<td>Latihan Kepramukaan</td>
								</tr>							    
							</tbody>
						</table>

						<br><br>

							<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra2.jpg" >						
							<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra3.jpg" >	
						<br><br>		
							<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra4.jpg" >
							<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra5.jpg" >
						<br><br>
							<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra6.jpg" >
							<img class="img-fluid" src="{{asset('/frontend')}}/ekstra/ekstra7.jpg" >						

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